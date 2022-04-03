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
    dd($request);
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
    $category->desc = $request->desc ?? 'Tidak ada deskripsi';

    if (!$category->isDirty()){
      return redirect()->back()->with('warning', 'Tidak ada data yang diubah!');
    }

    $category->push();

    return redirect()->back()->with('success', "Data kategori berhasil diubah!");
  }


  /* Remove the specified resource from storage. */
  public function destroy(Category $category)
  {
    return redirect()->back()->with('success', "Kategori berhasil dihapus!");
  }

}
