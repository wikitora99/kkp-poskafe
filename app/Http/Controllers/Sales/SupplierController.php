<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{

  public function __construct()
  {
    //
  }


  /* Display a listing of the resource. */
  public function index()
  {
    $suppliers = Supplier::orderBy('name', 'ASC')->get();

    return view('sales.supplier.index', compact('suppliers'));
  }


  /* Store a newly created resource in storage. */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:255',
      'desc' => 'nullable|string|max:255',
      'contact' => 'required|string|max:255',
      'address' => 'nullable|string|max:255'
    ]);

    if ($validator->fails()){
      return redirect()->back()->with('error', $validator->errors()->first());
    }

    Supplier::create($request->all());

    return redirect()->route('supplier.index')
                      ->with('success', 'Berhasil menambahkan Supplier baru!');
  }


  /* Update the specified resource in storage. */
  public function update(Request $request, Supplier $supplier)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:255',
      'desc' => 'nullable|string|max:255',
      'contact' => 'required|string|max:255',
      'address' => 'nullable|string|max:255'
    ]);

    if ($validator->fails()){
      return redirect()->back()->with('error', $validator->errors()->first());
    }

    $supplier->update($request->all());

    return redirect()->route('supplier.index')
                      ->with('success', 'Data Supplier berhasil diubah!');
  }


  /* Remove the specified resource from storage. */
  public function destroy(Supplier $supplier)
  {
    $stocks = $supplier->stocks->count();

    if ($stocks > 0){
      return redirect()->back()->with('info', "Tidak dapat menghapus Supplier, terdapat {$stocks} data Stok Masuk pada Supplier ini!");
    }

    $supplier->delete();

    return redirect()->route('supplier.index')
                      ->with('success', 'Supplier berhasil dihapus!');
  }
}
