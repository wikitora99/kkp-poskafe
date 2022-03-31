<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ {
  Product,
  ProductCategory as Category,
  ProductVariant as Variant,
  ProductStock as Stock
};

class ProductController extends Controller
{

  // public function __construct()
  // {
      //
  // }


  /** Display a listing of the resource. **/
  public function index()
  {
    $products = Product::all();
    // dd($products->first->category->name);

    return view('owner.product.index', compact('products'));
  }


  /** Show the form for creating a new resource. **/
  public function create()
  {
    $category = Category::all();
    return view('owner.product.create', compact('category'));
  }


  /** Store a newly created resource in storage. **/
  public function store(Request $request)
  {
    //
  }


  /** Display the specified resource. **/
  public function show(Product $product)
  {
    // dd($product);
    return view('owner.product.show', compact('product'));
  }


  /** Show the form for editing the specified resource. **/
  public function edit($id)
  {
    $category = Category::all();
    return view('owner.product.edit', compact('category'));
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
