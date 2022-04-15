<?php

namespace App\Http\Livewire\Cashier;

use Livewire\Component;
use App\Models\{ Product, ProductCategory as Category };

class ProductList extends Component
{
    
    public $products;
    public $categories;
    public $category = 0;

    public function render()
    {
        $this->categories = Category::all();

        if ($this->category != 0){
            $this->products = Product::where('category_id', $this->category)->orderBy('name', 'ASC')->get();
        }else{
            $this->products = Product::orderBy('name', 'ASC')->get();
        }
        
        return view('livewire.cashier.product-list');
    }
}
