<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutgoingItem extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function stock()
  {
    return $this->belongsTo(OutgoingStock::class, 'stock_id', 'id');
  }
}
