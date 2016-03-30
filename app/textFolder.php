<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class textFolder extends Model
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
  public function texts()
  {
    return $this->hasMany('App\Text');
  }
}
