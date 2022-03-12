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
  
  public function getLogin()
  {
    return view('auth.login');
  }

  public function postLogin(Request $request)
  {
    echo 'Login successfully!';
  }

  public function logout()
  {
    //
  }

}
