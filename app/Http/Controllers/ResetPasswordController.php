<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class ResetPasswordController extends Controller
{
    public function index($email, $token)
    {
        $this->CheckChangeLink($email, $token);

        return view('auth.ResetPassword')->with(["Verification" => $this->CheckTokenAndEmail, "token" => $token, "email" => $email]);
    }

    public function ValidateResetPassword(Request $req)
    {
        $this->CheckChangeLink($req->email, $req->token);

        $validation = $req->validate(
            [
                'NewPassword' => 'required',
                'NewPasswordRepeat' => 'required|same:NewPassword'
            ],
            []
        );

        if ($validation) {
            foreach ($this->CheckTokenAndEmail as $cte) {
            }

            if (isset($cte) && !Hash::check($req->NewPassword, $cte->password)) {
                return $this->ChangePassword($req->NewPassword, $req->email);
            } else {
                return redirect()->back()->withInput($req->only('email', 'remember'))->withErrors([
                    'NewPassword' => 'nu puteti introduce parola actuala',
                ]);
            }
        }
    }

    public function CheckChangeLink($email, $token)
    {
        $CheckTokenAndEmail =  json_decode(DB::table('users')->where(["email" => $email, "token" => $token])->get());

        foreach ($CheckTokenAndEmail as $cte) {
        }

        if (isset($cte) && Carbon::now() > Carbon::parse($cte->remember_token_expire)) {
            $CheckTokenAndEmail = [];
        }


        return $this->CheckTokenAndEmail = $CheckTokenAndEmail;
    }

    public function ChangePassword($password, $email)
    {
        $user = User::where(['email' => $email])->update([
            'token' => uniqid(base64_encode($email)),
            'remember_token_expire' => date('Y-m-d H:i:s', strtotime('-10 minutes', strtotime(date('Y-m-d H:i:s')))),
            'password' => Hash::make($password)
        ]);

        return redirect()->route('login');
    }
}
