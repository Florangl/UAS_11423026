<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
$password = Hash::make($request->input('password'));
class LoginController extends Controller
{
    //
    
    public function login(Request $request)
    {
        $this->validateLogin($request);
    
        if ($this->attemptLogin($request)) {
            // Jika login berhasil, cek role pengguna
            $user = Auth::user();
            if ($user->role === 'admin') {
                // Redirect pengguna admin ke halaman admin
                return redirect()->route('admin.dashboard=');
            } elseif ($user->role === 'user') {
                // Redirect pengguna biasa ke halaman user
                return redirect()->route('user.dashboard');
            }
        }
    
        // Jika role tidak valid atau login gagal, kembalikan dengan pesan error
        return $this->sendFailedLoginResponse($request);
    }
}