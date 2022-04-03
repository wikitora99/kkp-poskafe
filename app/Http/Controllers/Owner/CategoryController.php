<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Product, ProductCategory as Category };
use Illuminate\Support\Facades\{ Validator, Storage };

class CategoryController extends Controller
{

  public function __construct()
  {
    //
  }


  /* Display a listing of the resource. */
  public function index()
  {
    $categories = Category::all();

    return view('owner.category.index', compact('categories'));
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


  /* Update the specified resource in storage. */
  public function update(Request $request, $id)
  {
    //
  }


  /* Remove the specified resource from storage. */
  public function destroy($id)
  {
    //
  }

}
