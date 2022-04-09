<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ IncomingStock as Stock, IncomingItem as Item, Supplier };
use Illuminate\Support\Facades\{ Validator, DB };
use Carbon\Carbon;

class IncomingController extends Controller
{

    public function __construct()
    {
        //
    }


    /* Display a listing of the resource. */
    public function index()
    {
        $stocks = Stock::latest()->get();

        return view('sales.inventory.incoming.index', compact('stocks'));
    }


    /* Show the form for creating a new resource. */
    public function create()
    {
        $suppliers = Supplier::all();

        return view('sales.inventory.incoming.create', compact('suppliers'));
    }


    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'note' => 'nullable|string|max:255',
            'supplier_id' => 'required|integer|exists:suppliers,id',
            'date' => 'required|date',
            'names' => 'required|array',
            'prices' => 'nullable|array',
            'amounts' => 'required|array'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        try {
            DB::beginTransaction();

            $prefix = "IN";
            $date = Carbon::today()->format('ymd');
            $random = random_int(1, 9999);

            if ($random < 9999){
                $unicode = '0'.$random;
            }else if ($random < 999){
                $unicode = '00'.$random;
            }else{
                $unicode = '000'.$random;
            }

            $stock = new Stock;
            $stock->code = $prefix."".$date."".$unicode;
            $stock->note = $request->note;
            $stock->supplier_id = $request->supplier_id;
            $stock->date = $request->date;
            $stock->save();

            for ($i=0; $i < count($request->names); $i++) { 
                $item = new Item;
                $item->stock_id = $stock->id;
                $item->name = $request->names[$i];
                $item->price = $request->prices[$i];
                $item->amount = $request->amounts[$i];
                $item->total_price = $request->prices[$i] * $request->amounts[$i];
                $item->save();
            }
            
            DB::commit();

            return redirect()->route('incoming-stock.index')->with('success', 'Data Stok Masuk berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /* Display the specified resource. */
    public function show(Stock $stock)
    {
        return view('sales.inventory.incoming.show', compact('stock'));
    }


    /* Remove the specified resource from storage. */
    public function destroy(Stock $stock)
    {
        dd($stock);
    }
}
