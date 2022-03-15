<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelProduk;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelProduk::all();
        return view('produk.index', compact('data'), [
            'title' => 'Produk',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create',[
            'title' => 'Tambah Produk',
        ]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|string|max:255|unique:produk',
            'jenis_produk' => 'required|string|max:10',
            'harga' => 'required|integer'
        ]);
        
        // $validator = Validator::make($input, $rules, $messages = [
        //     'required' => ':Nama Produk Harus Di Isi!',
        // ]);

        // if ($validator->fails()){
        //     return redirect()->back()->with('failed', $validator->errors()->first());
        // }

        $data = [
            'nama_produk' => $request->nama_produk,
            'jenis_produk' => $request->jenis_produk,
            'harga' => $request->harga,
        ];

         modelProduk::create($data);

         return redirect()->route('produk.index')->with('success', 'Berhasil menambah data!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('produk.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'nama_produk' => 'required|unique:posts|',
            'jenis_produk' => 'required',
            'harga' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(modelProduk $produk)
    {

        $produk->delete();

        return redirect()->back()
                        ->with('success', 'Berhasil menghapus data!');
    }
}
