<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function status()
  {
    return $this->belongsTo(OrderStatus::class, 'status_id', 'id');
  }

  // public function products()
  // {
  //   return $this->hasMany(ProductOrder::class);
  // }
}
