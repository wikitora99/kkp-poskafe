<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingStock extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  protected $dates = ['date'];

  protected static $relations_on_cascade = ['items'];

	protected static function boot()
	{
		parent::boot();

		static::deleting(function ($stocks) {
			foreach (static::$relations_on_cascade as $relation){
				foreach ($stocks->{$relation}()->get() as $stock) {
					$stock->delete();
				}
			}			
		});
	}

  public function getRouteKeyName() 
  {
    return 'code';
  }

  public function items()
  {
    return $this->hasMany(IncomingItem::class, 'stock_id', 'id');
  }

  public function supplier()
  {
    return $this->belongsTo(Supplier::class, 'supplier_id' , 'id');
  }
}
