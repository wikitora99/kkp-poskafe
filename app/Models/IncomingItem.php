<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingItem extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function stock()
  {
    return $this->belongsTo(IncomingStock::class, 'stock_id', 'id');
  }
}
