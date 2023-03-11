<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index', [
            'title' => 'Login Bro',
            'author' => 'Azis Maulana'
        ]);
    }
    public function authenticate(Request $request)
    {
        if (request()->getMethod() == 'POST') {
            $rules = ['captcha' => 'required|captcha'];
            $validator = validator()->make(request()->all(), $rules);
            if ($validator->fails()) {
                echo '<p style="color: #ff0000;">Incorrect!</p>';
            } else {
                $credentials = $request->validate([
                    'email' => 'required|email',
                    'password' => 'required',
                ]);
                dd('berhasil login');
                // kalau sudah yakin bisa semua hapus dd dan nyalanakan script dibawah agar masuk ke db teman-teman ^^
                // if (Auth::attempt($credentials)) {
                //     $request->session()->regenerate();

                //     // atur mau redirect kemana kalo udah bisa login
                //     return redirect()->intended('login');
                // }

                // return back()->withErrors([
                //     'email' => 'The provided credentials do not match our records.',
                // ]);
            }
        }
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
