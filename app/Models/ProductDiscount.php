<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{
  use HasFactory; 

  protected $guarded = ['id'];

  public function product()
  {
    return $this->belongsTo(Product::class, 'product_id', 'id');
  }

  public function discount()
  {
    return $this->belongsTo(Discount::class, 'discount_id', 'id');
  }
}
