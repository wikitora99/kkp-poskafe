<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ OutgoingStock as Stock, OutgoingItem as Item };
use Illuminate\Support\Facades\{ Validator, DB };

class OutgoingController extends Controller
{

    public function __construct()
    {
        //
    }


    /* Display a listing of the resource. */
    public function index()
    {
        //
    }


    /* Show the form for creating a new resource. */
    public function create()
    {
        return view('sales.inventory.incoming.create');
    }


    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        //
    }


    /* Display the specified resource. */
    public function show($id)
    {
        //
    }


    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        //
    }
}
