<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Product, Discount, OrderType as Type };
use Illuminate\Support\Facades\{ Validator, DB };
use Illuminate\Support\Str;
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
        $types = Type::all();

        return view('sales.order.create', compact('types'));
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
