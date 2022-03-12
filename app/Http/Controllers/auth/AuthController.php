<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

  public function username()
  {
    return 'username';
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

    if (auth()->attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended(route('dashboard'))
                          ->with('success', 'Selamat datang '.auth()->user()->name);;
    }

    return redirect()->back()->with('error', 'Username atau password salah.');
  }


  public function logout()
  {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('login')->with('success', 'Sampai jumpa.');
  }

}
