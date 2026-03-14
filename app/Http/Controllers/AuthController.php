<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->login, 'password' => $request->password])) {
            $request->session()->regenerate();

            if (Auth::user()->is_admin) {
                return redirect()->intended('/admin/orders');
            }

            return redirect()->intended('/home');
        }

        return back()->withErrors(['login' => 'Неверный логин или пароль']);
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'login' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'phone' => 'nullable',
        ]);

        // Создание пользователя
        User::create([
            'name' => $request->name,
            'username' => $request->login,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // Автоматический вход после регистрации
        Auth::login(User::where('username', $request->login)->first());

        return redirect('/home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
