<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  // نمایش فرم لاگین
    public function showLoginForm()
    {
        return view('auth.login');
    }
	// انجام لاگین
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('melk.show');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
	// نمایش فرم ثبت‌نام
    public function showRegisterForm()
    {
        return view('auth.register');
    }
	// ثبت‌نام کاربر جدید
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('melk');
    }
	// خروج از حساب
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('melk');
    }	
}//End_Class
