<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class AuthenticationController extends Controller
{
    public function showLogin() {
        return view('authentication.login');
    }

    public function doLogin(Request $request) {
        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            $user = Auth::user();
            switch ($user->department) {
                case 'frontdesk':
                    return redirect('frontdesk');
                    break;
                case 'account':
                    return redirect('account');
                    break;
            }
        }
    }
}
