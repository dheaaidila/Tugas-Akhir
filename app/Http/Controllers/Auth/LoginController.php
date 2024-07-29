<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function showLogin()
    {
        return view('auth.login');
    }

    function loginProcess(Request $request)
    {
        $credential = [
            'nip' => request('nip'),
            'password' => request('password')
        ];

        if (auth()->attempt($credential)) {
            $user = auth()->user();
            if ($user->type == 'ADMIN') {
                return redirect('admin/dashboard')->with('success', 'Login Berhasil');
            } else {
                return redirect('pegawai/dashboard')->with('success', 'Login Berhasil');
            }
        } else {
            return view('auth.login', ['message' => 'Login Gagal, Silahkan Cek Email dan Password']);
        }

        if (captcha_check($request->captcha) == false) {
            return redirect()->back()->with('danger', 'Recapcha Salah, Silahka Masukkan Recapcha yang benar');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
