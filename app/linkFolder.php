<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class linkFolder extends Model
{
  protected $fillable = [
    'name',
    'parent',
    'user_id'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
  public function links()
  {
    return $this->hasMany('App\Link');
  }
}
