<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
    // dd($request);
      $validatedData = $request->validate([
            'sku' => 'required|unique:products',
            'category_id' => 'required',
            'name' => 'required|max:25',
            'picture' => 'image|file|max:5120',
            'price' => 'required|numeric'
        ]);

      if ($request->file('picture')) {
          $validatedData['picture'] = $request->file('picture')->store('product-picture');
      }

      // $validatedData['user_id'] = auth()->user()->id;
      Product::create($validatedData);
      
      return redirect()->route('product.index')->with('success','Data produk berhasil ditambah');
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
  public function destroy(Product $product)
  {
    if ($product->picture) {
        Storage::delete($product->picture);
    }

    Product::destroy($product->id);

    return redirect()->route('product.index')->with('success','Data produk berhasil di Hapus !');
  }

}
