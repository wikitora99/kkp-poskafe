<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{ Auth, Gate };

class AuthController extends Controller
{

  public function username()
  {
    return 'username';
  }


  public function redirectTo()
  {
    if (Auth::check()){
      // if (!Gate::check('owner')){
      //   return redirect()->route('product.index');
      // }
      return redirect()->route('dashboard');
    }
    return redirect()->route('login');
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
      // $user = User::firstWhere('username', $request->username);
      // if (!Gate::check('owner', $user)){
      //   redirect to pegawai hompepage
      // }

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


  private function _welcomeTo()
  {
    //
  }

}
