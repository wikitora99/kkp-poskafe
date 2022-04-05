<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Product, ProductCategory as Category };
use Illuminate\Support\Facades\{ Validator, Storage };
use Illuminate\Support\Str;

class CategoryController extends Controller
{

  public function __construct()
  {
    //
  }


  /* Display a listing of the resource. */
  public function index()
  {
    $categories = Category::orderBy('name', 'asc')->get();

    return view('owner.category.index', compact('categories'));
  }


  /* Store a newly created resource in storage. */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:255|unique:product_categories,name',
      'desc' => 'nullable|string|max:255'
    ]);

    if ($validator->fails()){
      return redirect()->back()->with('error', $validator->errors()->first());
    }

    $category = new Category;
    $category->name = $request->name;
    $category->slug = Str::slug($request->name);
    $category->desc = $request->desc;
    $category->save();

    return redirect()->route('category.index')
                      ->with('success', 'Berhasil menambahkan Kategori baru!');
  }


  /* Display the specified resource. */
  public function show(Category $category)
  {
    //
  }


  /* Update the specified resource in storage. */
  public function update(Request $request, Category $category)
  {
    if ($request->name != $category->name){
      $name_rules = ['required', 'string', 'max:255', 'unique:product_categories,name'];
    }else{
      $name_rules = ['required'];
    }

    $validator = Validator::make($request->all(), [
      'name' => $name_rules,
      'desc' => 'nullable|string|max:255'
    ]);

    if ($validator->fails()){
      return redirect()->back()->with('error', $validator->errors()->first());
    }

    $category->name = $request->name;
    $category->slug = Str::slug($request->name);
    $category->desc = $request->desc;

    if (!$category->isDirty()){
      return redirect()->back()->with('warning', 'Tidak ada data yang diubah!');
    }

    $category->push();

    return redirect()->route('category.index')->with('success', 'Data Kategori berhasil diubah!');
  }


  /* Remove the specified resource from storage. */
  public function destroy(Category $category)
  {
    $products = $category->products->count();

    if ($products > 0){
      return redirect()->back()->with('info', "Tidak dapat menghapus Kategori, terdapat {$products} Produk di dalam Kategori ini!");
    }

    $category->delete();

    return redirect()->route('category.index')->with('success', 'Kategori berhasil dihapus!');
  }

}
