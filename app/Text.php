<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
  protected $fillable = [
    'text',
    'user_id'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
