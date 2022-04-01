<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Product, ProductCategory, ProductOrder};

class ProductController extends Controller
{

  public function __construct()
  {
    //
  }


  /** Display a listing of the resource. **/
  public function index()
  {
    $products = Product::orderBy('name', 'asc')->get();

    return view('owner.product.index', compact('products'));
  }


  /** Show the form for creating a new resource. **/
  public function create()
  {
    return view('owner.product.create');
  }


  /** Store a newly created resource in storage. **/
  public function store(Request $request)
  {
    //
  }


  /** Display the specified resource. **/
  public function show(Product $product)
  {
    // $total_sales = ProductOrder::all()->sum('total_order');
    // $product_sales = $product->orders->sum('total_order');
    // $percentage = number_format((($product_sales / $total_sales) * 100), 2, ',', '.');

    return view('owner.product.show', compact('product'));
  }


  /** Show the form for editing the specified resource. **/
  public function edit(Product $product)
  {
    dd($product);
  }


  /** Update the specified resource in storage. **/
  public function update(Request $request, $id)
  {
    //
  }


  /** Remove the specified resource from storage. **/
  public function destroy($id)
  {
    //
  }

}
