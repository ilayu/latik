<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
  protected $fillable = [
    'text',
    'folder_id'
  ];

  // public function user()
  // {
  //   return $this->belongsTo('App\User');
  // }
  public function folder()
  {
    return $this->belongsTo('App\textFolder');
  }
}
