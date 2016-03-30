<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
  protected $fillable = [
    'link',
    'name',
    'user_id'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
