<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function category()
  {
    return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
  }

  public function variants()
  {
    return $this->hasMany(ProductVariant::class);
  }

  // public function stock()
  // {
  //   return $this->belongsTo(ProductStock::class);
  // }

  // public function discounts()
  // {
  //   return $this->hasMany(ProductDiscount::class);
  // }

  // public function orders()
  // {
  //   return $this->hasMany(ProductOrder::class);
  // }
}
