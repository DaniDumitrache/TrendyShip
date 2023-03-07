<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Delivery;
use App\Models\productsTable;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\adminController;
use Vonage\Client\Credentials\Basic;

class CustomerController extends Controller
{
    public function account()
    {
        if (!Auth::check()) {
            return back();
        }

        $this->RecentOrder();
        $this->GetTotalOrder();

        return view('account.account')->with([
            'Customer' => Auth::user(),
            'RecentOrders' => $this->RecentOrders,
            'TotalOrders' => $this->TotalOrder,
        ]);
    }

    public function ActionSafeSetings(Request $req)
    {
        if (isset($req->Email)) {
            $AfterAction = 'Email';
        } elseif (isset($req->Password)) {
            $AfterAction = 'Password';
        } elseif (isset($req->MultiFactorAuthentication)) {
            $AfterAction = 'MultiFactorAuthentication';
        }

        return view('auth.ValidatePassword')->with(['action' => $AfterAction]);
    }

    public function ChangeEmail(Request $req)
    {
        $validation = $req->validate([
            'email' => ['required', 'min:8', 'email'],
        ]);

        if (!$validation) {
            return back();
        }

        if (!User::where('email', $req->email)->first()) {
            User::where('email', Auth::user()->email)->update([
                'email' => $req->email,
            ]);

            $adminController = new adminController();

            if ($adminController->CheckIsAdmin()) {
                Admin::where('email', Auth::user()->email)->update([
                    'email' => $req->email,
                ]);
            }
        } else {
            return view('auth.ChangeEmail')->withErrors([
                'email' => 'adresa de e-mail deja este folosita',
            ]);
        }
        return redirect()->route('SecuritySettings');
    }

    public function ChangePassword(Request $req)
    {
        $validation = $req->validate([
            'NewPassword' => ['required', 'min:8'],
        ]);

        if (!$validation) {
            return back();
        }

        $user = Auth::user();
        $user->password = password_hash($req->NewPassword, PASSWORD_DEFAULT);
        $user->save();

        return redirect()->route('SecuritySettings');
    }

    public function order()
    {
        $delivery = Delivery::where(['OrderBy' => Auth::user()->email])->get();
        foreach ($delivery as $dev) {
        }
        $pd = [];
        foreach (json_decode($dev->products) as $products) {
            array_push($pd, $products->id);
        }

        $ProductsData = productsTable::whereIn('id', $pd)->get();

        return view('account.order.orderHistory')->with([
            'Orders' => $delivery,
            'ProductsData' => $ProductsData,
        ]);
    }

    public function SendVerificationCode2fa(Request $req)
    {
        $validation = $req->validate([
            'phone' => [
                'required',
                'regex:/^(?:(\+))?(?:[\s.\/-]?)?(?:(?:\((?=\d{3}\)))?(\d{3})(?:(?!\(\d{3})\))?[\s.\/-]?)?(?:(?:\((?=\d{3}\)))?(\d{3})(?:(?!\(\d{3})\))?[\s.\/-]?)?(?:(?:\((?=\d{4}\)))?(\d{4})(?:(?!\(\d{4})\))?[\s.\/-]?)?$/',
            ],
        ]);

        if (!$validation) {
            return back();
        }

        $code = rand(1000, 9999);
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://www.smsadvert.ro/api/sms/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>
                '{
  "phone": "' .
                $req->phone .
                '",
  "shortTextMessage": "codul tau de verificare este: ' .
                $code .
                ' ' .
                asset('') .
                '",
  "sendAsShort": true
}',
            CURLOPT_HTTPHEADER => [
                'Authorization: API_KEY',
                'Content-Type: application/json',
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return view('auth.2fa.verificationCode')->with([
            'code' => $code,
            'phone' => $req->phone,
        ]);
    }

    public function Activate2fa(Request $req)
    {
        $validation = $req->validate([
            'VerificationCode' => ['required'],
        ]);

        if (!$validation) {
            return back();
        }

        if ($req->VerificationCode == $req->code) {
            $user = Auth::user();
            $user->MultiFactorAuthentication = ($user->MultiFactorAuthentication == 0) ? true : false;
            $user->save();
        } else {
            return view('auth.verificationCode')->withErrors([
                'VerificationCode' =>
                    'Ai introdus greșit codul de autentificare. Te rugăm completează din nou.',
            ]);
        }

        return redirect()->route('SecuritySettings');
    }

    public function RecentOrder()
    {
        $RecentOrders = DB::table('delivery')
            ->latest()
            ->where(['OrderBy' => Auth::user()->email])
            ->take(2)
            ->get();

        return $this->RecentOrders = $RecentOrders;
    }

    public function GetTotalOrder()
    {
        $TotalOrder = DB::table('delivery')
            ->where(['OrderBy' => Auth::user()->email])
            ->count();

        return $this->TotalOrder = $TotalOrder;
    }

    public function orderDetalis(Request $req, $id)
    {
        $delivery = Delivery::where(['OrderId' => $id])->get();

        foreach ($delivery as $delivery) {
        }

        $DeliveryProducts = productsTable::whereIn('id', [
            $delivery->products,
        ])->get();

        return view('account.order.orderDetalis')->with([
            'Order' => $delivery,
            'Products' => $DeliveryProducts,
        ]);
    }
}
