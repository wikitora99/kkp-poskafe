<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\{ Storage, Validator, DB };

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
    
      $rules = [
          'sku' => 'required|unique:products',
          'category_id' => 'required|exists:product_categories,id',
          'name' => 'required|max:25',
          'picture' => 'image|file|max:5120',
          'price' => 'required|numeric',
          'has_stock' => 'required|boolean'
      ];

      $customText = [
          'sku.required' => 'Sku Tidak Boleh Kosong !',
          'sku.unique' => 'Kode SKU Sudah Digunakan !',
          'category.required' => 'Category Tidak Boleh Kosong !',
          'name.required' => 'Nama Produk Tidak Boleh Kosong !',
          'name.max' => 'Panjang Karakter Nama Produk Max 25 !',
          'picture.image' => 'File Harus Berupa JPG, JPEG, PNG !',
          'picture.max' => 'Ukuran Gambar Max 5mb',
          'price.required' => 'Harga Tidak Boleh Kosong !',
          'has_stock.required' => 'Pilih Salah Satu Lacak Inventori !',
      ];

      
      $validateData = Validator::make($request->all(), $rules, $customText);

      if ($validateData->fails()){
          return redirect()->back()->with('error', $validateData->errors()->first());
          // return redirect()->back()->with('error', 'Harap masukkan data dengan benar, cok!');
      }
      
      $product = new Product;
      if ($request->hasFile('picture')){
          $product->picture = Storage::disk('public')->putFile('product-picture', $request->file('picture'));
      }
      $product->sku = $request->sku;
      $product->category_id = $request->category_id;
      $product->name = $request->name;
      $product->price = $request->price;
      $product->has_stock = $request->has_stock;
      $product->save();
      
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
    $category = Category::all();
    return view('owner.product.edit', compact('category', 'product'));
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
