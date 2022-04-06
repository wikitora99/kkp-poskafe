<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  public function fromUser()
  {
    return $this->belongsTo(User::class, 'from', 'id');
  }

  public function toUser()
  {
    return $this->belongsTo(User::class, 'to', 'id');
  }
}
