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
    $categories = ProductCategory::all();
    return view('owner.product.create', compact('categories'));
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

    try {
      DB::beginTransaction();

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
      }

      $product->save();

      DB::commit();

      return redirect()->route('product.index')
                        ->with('success', 'Berhasil menambahkan produk baru!');
    } catch (Exception $e) {
      DB::rollback();

      return redirect()->back()->with('error', $e->getMessage());
    }
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
    // dd($request);
    return redirect()->back()->with('success', 'Data produk berhasil diubah!');
  }


  /** Remove the specified resource from storage. **/
  public function destroy(Product $product)
  {
    // dd($product);
    return redirect()->route('product.index')->with('success', 'Data produk berhasil dihapus!');
  }

}
