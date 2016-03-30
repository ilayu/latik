<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
  protected $fillable = [
    'link',
    'name',
    'folder_id'
  ];

  // public function user()
  // {
  //   return $this->belongsTo('App\User');
  // }
  public function folder()
  {
    return $this->belongsTo('App\linkFolder');
  }
}
