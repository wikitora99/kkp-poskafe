<?php

namespace App\Http\Livewire\Cashier;

use Livewire\Component;
use App\Models\Product;

class ProductList extends Component
{
    
    public $products;

    public function render()
    {
        $this->products = Product::all();
        
        return view('livewire.cashier.product-list');
    }
}
