<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function getRouteKeyName() 
  {
    return 'sku';
  }

  public function category()
  {
    return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
  }

  public function discounts()
  {
    return $this->hasMany(Discount::class);
  }

  public function orders()
  {
    return $this->hasMany(ProductOrder::class);
  }
}
