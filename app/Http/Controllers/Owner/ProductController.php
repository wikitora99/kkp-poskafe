<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Product, ProductCategory, ProductOrder };
use Illuminate\Support\Facades\{ Validator, Storage, DB };

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
    $categories = ProductCategory::all();

    return view('owner.product.show', compact('product', 'categories'));
  }


  /** Update the specified resource in storage. **/
  public function update(Request $request, Product $product)
  {
    dd($request);
  }


  /** Remove the specified resource from storage. **/
  public function destroy(Product $product)
  {
    // dd($product);
    return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus!');
  }

}
