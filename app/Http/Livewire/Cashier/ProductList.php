<?php

namespace App\Http\Livewire\Cashier;

use Livewire\Component;
// use Livewire\WithPagination;
use App\Models\{ Product, ProductCategory as Category };

class ProductList extends Component
{
    // use WithPagination;
    // protected $paginationTheme = 'bootstrap';

    public $categories;
    public $category = 0;
    public $search = '';

    public function render()
    {
        $this->categories = Category::all();

        if ($this->category != 0){
            $products = Product::where('name', 'like', '%'.$this->search.'%')->
                                where('category_id', $this->category)->orderBy('name', 'ASC')->get();
        }else{
            $products = Product::where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'ASC')->get();
        }
        
        return view('livewire.cashier.product-list', [
            'products' => $products
        ]);
    }

    // public function updatingSearch()
    // {
    //     $this->resetPage();
    // }
}
