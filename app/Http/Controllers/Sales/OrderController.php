<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Product, Discount, ProductOrder as Order, OrderType as Type };
use Illuminate\Support\Facades\{ Validator, DB };
use Illuminate\Support\Str;
use Carbon\Carbon;

class OrderController extends Controller
{

    public function __construct()
    {

    }


    public function index()
    {
        dd('Halaman daftar pesanan aktif');
    }


    public function create()
    {
        $types = Type::all();

        return view('sales.order.create', compact('types'));
    }


    public function process(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_type' => 'required|integer|exists:order_type,id',
            'products_id' => 'required|array',
            'total_orders' => 'nullable|array',
            'total_prices' => 'required|array'
        ]);

        if ($validator->fails()){
            // return redirect()->back()->with('error', $validator->errors()->first());
            return redirect()->back()->with('error', 'Pilih produk yang ingin dipesan terlebih dahulu!');
        }

        $prefix = "TX";
        $date = Carbon::today()->format('ymd');
        $random = random_int(1, 9999);

        if ($random < 9999){
            $unicode = '0'.$random;
        }else if ($random < 999){
            $unicode = '00'.$random;
        }else{
            $unicode = '000'.$random;
        }

        $order_price = 0;
        $order_discount = 0;

        for ($i = 0; $i < count($request->total_prices); $i++)
        { 
            $order_price += $request->total_prices[$i];
        }

        for ($i = 0; $i < count($request->total_orders); $i++)
        {    
            $product = Product::find($request->products_id[$i]);
            if ($product->discounts->isNotEmpty())
            {
                $discount = $product->discounts->first();
                if ($discount->no_expired || ($discount->due_date >= Carbon::today()))
                {
                    if ($order_price >= $discount->min_order)
                    {
                        $order_discount += $discount->in_percent 
                                            ? ($discount->value / 100) * $product->sell_price 
                                            : $discount->value;
                    }
                }
            }
        }

        $request->request->add([
            'order_code' => $prefix."".$date."".$unicode,
            'order_time' => Carbon::now(),
            'order_price' => $order_price,
            'order_discount' => $order_discount,
            'total_order_price' => $order_price - $order_discount
        ]);

        dd($request->total_order_price);

        return view('sales.order.process', compact('request'));
    }


    public function store(Request $request)
    {
        dd($request);
    }


    public function show($id)
    {
        //
    }
    


    public function destroy($id)
    {
        //
    }
}
