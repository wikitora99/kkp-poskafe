<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
      $validateData = $request->validate([
            'sku' => 'required|unique:products',
            'category_id' => 'required',
            'name' => 'required|max:25',
            'picture' => 'image|file|max:5120',
            'price' => 'required|numeric'
        ]);

      if ($request->file('picture')) {
          $validateData['picture'] = $request->file('picture')->store('product-picture');
      }

      Product::create($validateData);
      
      return redirect()->route('product.index')->with('success','Data produk berhasil ditambah !');
  }


  /** Display the specified resource. **/
  public function show(Product $product)
  {
    // dd($product);
    return view('owner.product.show', compact('product'));
    
  }


  /** Show the form for editing the specified resource. **/
  public function edit(Product $product)
  {
    return view('owner.product.edit', [
            'category' => Category::all(),
            'product' => $product
    ]);
  }


  /** Update the specified resource in storage. **/
  public function update(Request $request, Product $product)
  {

      $rules = [
        'category_id' => 'required',
        'name' => 'required|max:25',
        'picture' => 'image|file|max:5120',
        'price' => 'required|numeric'
      ];

      if ($request->sku != $product->sku) {
            $rules['sku'] = 'required|unique:products';
        }

      $validateData = $request->validate($rules);

      if ($request->file('picture')) {
        if ($request->oldPicture) {
            Storage::delete($request->oldPicture);
        }
        $validateData['picture'] = $request->file('picture')->store('product-picture');
      }

      $product->update($validateData);
      
      return redirect()->route('product.index')->with('success','Data produk berhasil diubah !');
  }


  /** Remove the specified resource from storage. **/
  public function destroy(Product $product)
  {
    // dd($product);

    // Unset Image Dari Storage
    if ($product->picture) {
            Storage::delete($product->picture);
        }
    
    $product->delete();
    return redirect()->route('product.index')->with('success','Data produk berhasil di hapus !');
  }

}
