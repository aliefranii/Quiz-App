<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');  // Menampilkan halaman login
    }

    public function login(Request $request)
    {
        // Validasi data login
        $credentials = $request->only('email', 'password');

        // Jika autentikasi berhasil
        if (Auth::attempt($credentials)) {
            $user = Auth::user();  // Mendapatkan pengguna yang sedang login

            // Mengarahkan berdasarkan role pengguna
            if ($user->role == 'guru') {
                // Jika role guru, arahkan ke dashboard guru
                return redirect()->route('pages.teacher');
            } elseif ($user->role == 'siswa') {
                // Jika role siswa, arahkan ke dashboard siswa
                return redirect()->route('pages.student');
            }

            // Jika role tidak dikenali, arahkan ke halaman home atau dashboard default
            return redirect()->route('home');
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

