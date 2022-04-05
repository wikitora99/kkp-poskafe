<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Order, Product, ProductCategory };

class DashboardController extends Controller
{

  public function __construct()
  {
    //
  }

  
  public function index()
  {
    return view('main.dashboard');
  }


  public function filter(Request $request)
  {
    dd($request);
  }

}