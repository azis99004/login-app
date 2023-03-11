<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Daftar Disini',
            'author' => 'Azis Maulana'
        ]);
    }
    public function store(Request $request)
    {
        if (request()->getMethod() == 'POST') {
            $rules = ['captcha' => 'required|captcha'];
            $validator = validator()->make(request()->all(), $rules);
            if ($validator->fails()) {
                echo '<p style="color: #ff0000;">Incorrect!</p>';
            } else {
                $ValidatedData = $request->validate([
                    'name' => 'required|max:255',
                    'email' => 'required|email',
                    'password' => 'required|min:5|max:255'
                ]);
                dd('berhasil register');

                // jika sudah di configurasi hapus baris dd dan eksekusi program dibawah

                // // $ValidatedData['password'] = bcrypt($ValidatedData['password']);
                // $ValidatedData['password'] = Hash::make($ValidatedData['password']);

                // // User::create($ValidatedData); lu naro dimana

                // // $request->session()->flash('success', 'Pembuatan Akun Berhasil!Silahkan Login!');


                // return redirect('/login');
            }
        }
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
