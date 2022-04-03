<?php

namespace App\Http\Controllers\Owner;

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
    return view('owner.dashboard');
  }


  public function filter(Request $request)
  {
    dd($request);
  }

}
