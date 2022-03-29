<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaffeeInfo extends Model
{
  use HasFactory;

  protected $table = 'caffee_info';

  protected $guarded = ['id'];
}
