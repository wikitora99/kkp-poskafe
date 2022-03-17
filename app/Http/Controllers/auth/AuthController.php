<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

  public function username()
  {
    return 'username';
  }


  public function redirectTo()
  {
    if (!Auth::check()){
      return redirect()->route('login');
    }
    return redirect()->route('dashboard');
  }

  
  public function index()
  {
    return view('auth.login');
  }


  public function login(Request $request)
  {
    $credentials = $request->validate([
      'username' => 'required|string',
      'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended(route('dashboard'))
                        ->with('success', 'Selamat datang, '.Auth::user()->name.'!');
    }

    return redirect()->back()->with('error', 'Username atau password salah!');
  }


  public function logout()
  {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('login')->with('success', 'Berhasil keluar, sampai jumpa!');
  }

}
