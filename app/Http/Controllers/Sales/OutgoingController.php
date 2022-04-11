<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ OutgoingStock as Stock, OutgoingItem as Item };
use Illuminate\Support\Facades\{ Validator, DB };
use Carbon\Carbon;

class OutgoingController extends Controller
{

    public function __construct()
    {
        //
    }


    /* Display a listing of the resource. */
    public function index()
    {
        $stocks = Stock::orderBy('date', 'DESC')->get();

        return view('sales.inventory.outgoing.index', compact('stocks'));
    }


    /* Show the form for creating a new resource. */
    public function create()
    {
        return view('sales.inventory.outgoing.create');
    }


    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'note' => 'nullable|string|max:255',
            'date' => 'required|date',
            'names' => 'required|array',
            'amounts' => 'required|array'
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        try {
            DB::beginTransaction();

            $prefix = "OG";
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
            $stock->date = $request->date;
            $stock->save();

            for ($i=0; $i < count($request->names); $i++) { 
                $item = new Item;
                $item->stock_id = $stock->id;
                $item->name = $request->names[$i];
                $item->amount = $request->amounts[$i];
                $item->save();
            }
            
            DB::commit();

            return redirect()->route('outgoing-stock.index')->with('success', 'Data Stok Keluar berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /* Display the specified resource. */
    public function show(Stock $outgoing_stock)
    {
        $items = Item::where('stock_id', $outgoing_stock->id)->get();

        return view('sales.inventory.outgoing.show', compact('outgoing_stock', 'items'));
    }


    /* Remove the specified resource from storage. */
    public function destroy(Stock $outgoing_stock)
    {
        $outgoing_stock->delete();

        return redirect()->route('outgoing-stock.index')->with('success', 'Data Stok Keluar berhasil dihapus!');
    }
}
