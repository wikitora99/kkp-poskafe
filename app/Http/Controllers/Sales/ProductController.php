<?php

namespace App\Http\Controllers\Sales;

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
    $products = Product::orderBy('sku', 'ASC')->get();

    return view('sales.product.index', compact('products'));
  }


  /** Show the form for creating a new resource. **/
  public function create()
  {
    $categories = ProductCategory::all();
    return view('sales.product.create', compact('categories'));
  }


  /** Store a newly created resource in storage. **/
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'sku' => 'required|string|max:255|unique:products,sku',
      'name' => 'required|string|max:255|unique:products,name',
      'category_id' => 'required|integer|exists:product_categories,id',
      'picture' => 'file|image|mimes:jpg,png|max:1024',
      'desc' => 'nullable|string|max:255',
      'is_active' => 'required|boolean',
      'buy_price' => 'nullable|integer',
      'sell_price' => 'required|integer',
      'has_stock' => 'required|boolean|declined_if:cur_stock,0',
      'cur_stock' => 'required_if:has_stock,1|integer',
      'min_stock' => 'required_if:has_stock,1|integer'
    ]);

    if ($validator->fails()){
      return redirect()->back()->with('error', $validator->errors()->first());
    }

    $product = new Product;
    $product->sku = $request->sku;
    $product->category_id = $request->category_id;
    $product->name = $request->name;
    $product->desc = $request->desc;
    $product->buy_price = $request->buy_price ?? 0;
    $product->sell_price = $request->sell_price;
    $product->has_stock = $request->has_stock;
    $product->cur_stock = $request->cur_stock ?? 0;
    $product->min_stock = $request->min_stock ?? 0;
    $product->is_active = $request->is_active;

    if ($request->hasFile('picture')){
      $product->picture = Storage::disk('public')->putFile('product', $request->file('picture'));
    }else{
      $product->picture = 'product/default.jpg';
    }

    $product->save();

    return redirect()->route('product.index')
                      ->with('success', 'Berhasil menambahkan Produk baru!');
  }


  /** Display the specified resource. **/
  public function show(Product $product)
  {
    // $total_sales = ProductOrder::all()->sum('total_order');
    // $product_sales = $product->orders->sum('total_order');
    // $percentage = number_format((($product_sales / $total_sales) * 100), 2, ',', '.');
    $categories = ProductCategory::all();
    $sales = true;

    return view('sales.product.show', compact('product', 'categories', 'sales'));
  }


  /** Update the specified resource in storage. **/
  public function update(Request $request, Product $product)
  {
    if ($request->name != $product->name){
      $name_rules = ['required', 'string', 'max:255', 'unique:products,name'];
    }else{
      $name_rules = ['required'];
    }

    $validator = Validator::make($request->all(), [
      'name' => $name_rules,
      'category_id' => 'required|integer|exists:product_categories,id',
      'picture' => 'file|image|mimes:jpg,png|max:1024',
      'desc' => 'nullable|string|max:255',
      'is_active' => 'required|boolean',
      'buy_price' => 'nullable|integer',
      'sell_price' => 'required|integer',
      'has_stock' => 'required|boolean|declined_if:cur_stock,0',
      'cur_stock' => 'required_if:has_stock,1|integer',
      'min_stock' => 'required_if:has_stock,1|integer'
    ]);

    if ($validator->fails()){
      return redirect()->back()->with('error', $validator->errors()->first());
    }

    $product->category_id = $request->category_id;
    $product->name = $request->name;
    $product->desc = $request->desc;
    $product->buy_price = $request->buy_price ?? 0;
    $product->sell_price = $request->sell_price;
    $product->has_stock = $request->has_stock;
    $product->cur_stock = $request->cur_stock ?? 0;
    $product->min_stock = $request->min_stock ?? 0;
    $product->is_active = $request->is_active;

    if ($request->hasFile('picture')){
      if ($product->picture != 'product/default.jpg'){
        Storage::disk('public')->delete($product->picture);
      }
      $product->picture = Storage::disk('public')->putFile('product', $request->file('picture'));
    }

    if (!$product->isDirty()){
      return redirect()->back()->with('warning', 'Tidak ada data yang diubah!');
    }

    $product->push();

    return redirect()->route('product.index')->with('success', 'Data Produk berhasil diubah!');
  }


  /** Remove the specified resource from storage. **/
  public function destroy(Product $product)
  {  
    if ($product->picture != 'product/default.jpg') {
      Storage::disk('public')->delete($product->picture);
    }

    $product->delete();

    return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus!');
  }

}
