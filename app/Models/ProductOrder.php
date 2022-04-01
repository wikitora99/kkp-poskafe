<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
  use HasFactory;

  protected $guarded = ['id']  ;

  public function transaction()
  {
    return $this->belongsTo(Order::class, 'order_id', 'id');
  }
}
