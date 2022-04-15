<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Product, Discount };
use Illuminate\Support\Facades\{ Validator, DB };
use Carbon\Carbon;

class OrderController extends Controller
{
   
    public function __construct()
    {

    }


    public function index()
    {
        //
    }

  
    public function create()
    {
        return view('sales.order.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
