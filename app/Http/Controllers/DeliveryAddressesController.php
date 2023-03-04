<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryAddresses;
use Illuminate\Support\Facades\Auth;

class DeliveryAddressesController extends Controller
{
    public function index()
    {
        return view('account.DeliveryAddresses')->with([
            'addresses' => $this->addresses(),
        ]);
    }

    public static function addresses()
    {
        $addresses = DeliveryAddresses::where([
            'user_id' => Auth::user()->id,
        ])->get();

        return $addresses;
    }

    public function AddressData($address_id)
    {
        $addresses = DeliveryAddresses::find($address_id);

        return view('account.address.EditAddress')->with([
            'address' => $addresses,
        ]);
    }

    public function addAdresses(Request $req)
    {
        $validation = $req->validate([
            'full_name' => ['required', 'max:255'],
            'PhoneNumber' => [
                'required',
                'regex:/^(?:(\+))?(?:[\s.\/-]?)?(?:(?:\((?=\d{3}\)))?(\d{3})(?:(?!\(\d{3})\))?[\s.\/-]?)?(?:(?:\((?=\d{3}\)))?(\d{3})(?:(?!\(\d{3})\))?[\s.\/-]?)?(?:(?:\((?=\d{4}\)))?(\d{4})(?:(?!\(\d{4})\))?[\s.\/-]?)?$/',
            ],
            'County' => ['required', 'max:255'],
            'city' => ['required', 'max:255'],
            'Adress' => ['required', 'max:255'],
        ]);

        if (!$validation) {
            return back();
        }

        $addresses = new DeliveryAddresses();
        $addresses->user_id = Auth::user()->id;
        $addresses->full_name = $req->input('full_name');
        $addresses->address_line_1 = $req->input('Adress');
        $addresses->city = $req->input('city');
        $addresses->county = $req->input('County');
        // $addresses->zip_code = $req->input('zip_code');
        // $addresses->country = $req->input('country');
        $addresses->phone_number = $req->input('PhoneNumber');
        $addresses->timestamps = false;
        $addresses->save();

        return back();
    }

    public function DeleteAddress($address_id)
    {
        $addresses = DeliveryAddresses::find($address_id);

        if ($addresses->user_id == Auth::user()->id) {
            $addresses->delete();
        }

        return back();
    }

    public function EditAddress(Request $req)
    {
        $validation = $req->validate([
            'address_id' => ['required'],
            'full_name' => ['required', 'max:255'],
            'PhoneNumber' => [
                'required',
                'regex:/^(?:(\+))?(?:[\s.\/-]?)?(?:(?:\((?=\d{3}\)))?(\d{3})(?:(?!\(\d{3})\))?[\s.\/-]?)?(?:(?:\((?=\d{3}\)))?(\d{3})(?:(?!\(\d{3})\))?[\s.\/-]?)?(?:(?:\((?=\d{4}\)))?(\d{4})(?:(?!\(\d{4})\))?[\s.\/-]?)?$/',
            ],
            'County' => ['required', 'max:255'],
            'city' => ['required', 'max:255'],
            'Adress' => ['required', 'max:255'],
        ]);

        if (!$validation) {
            return back();
        }

        $addresses = DeliveryAddresses::find($req->input('address_id'));

        if ($addresses->user_id == Auth::user()->id) {
            $addresses->full_name = $req->input('full_name');
            $addresses->address_line_1 = $req->input('Adress');
            $addresses->city = $req->input('city');
            $addresses->county = $req->input('County');
            $addresses->phone_number = $req->input('PhoneNumber');
            $addresses->timestamps = false;
            $addresses->save();
        }
        return back();
    }
}
