<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingStock extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function items()
  {
    return $this->hasMany(IncomingItem::class);
  }

  public function supplier()
  {
    return $this->belongsTo(Supplier::class, 'supplier_id' , 'id');
  }
}
