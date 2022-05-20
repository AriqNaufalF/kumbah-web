<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect("");
        } else {
            return view("auth.login");
        }
    }

    public function landing()
    {
        if (Auth::check()) {
            return redirect("");
        } else {
            return view("landing");
        }
    }

    public function login(Request $req)
    {
        $email  = $req->email;
        $pass   = $req->pass;

        if (Auth::attempt(['role' => 'User', 'email' => $email, 'password' => $pass])) {
            return redirect("");
        } else {
            alert()->error("Login Gagal", "Periksa Kembali Email atau Password")->autoClose(3000);
            return redirect("login");
        }
    }

    public function register(Request $req)
    {
        if (User::where('email', '=', $req->email)->count() > 0) {
            alert()->error("Register Gagal", "Email Sudah Terdaftar !")->autoClose(3000);
            return redirect("login");
        } else {
            $user = new User();
            $user->name     = $req->name;
            $user->address  = "Change your address";
            $user->phone    = $req->phone;
            $user->email    = $req->email;
            $user->password = Hash::make($req->pass);
            $user->role     = "User";
            $user->save();

            alert()->success("Register Berhasil", "User Berhasil Terdaftar !")->autoClose(3000);
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('landing');
    }
}
