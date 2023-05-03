<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = Auth::user()->role;

            switch ($role) {
                case 'superadmin':
                    return redirect()->intended('/superadmin');
                    break;

                case 'marketing':
                    return redirect()->intended('/marketing');
                    break;
                case 'finance':
                    return redirect()->intended('/finance');
                    break;
                case 'logistik':
                    return redirect()->intended('/logistik');
                    break;
                default:
                    return back()->with('loginError', 'Login Failed, Please Check your username or password');
                    break;
            }
        }

        return back()->with('loginError', 'Login Failed, Please Check your username or password');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
