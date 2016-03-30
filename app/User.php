<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function links()
    // {
    //     return $this->hasMany('App\Link');
    // }
    // public function texts()
    // {
    //     return $this->hasMany('App\Text');
    // }
    public function textFolders()
    {
        return $this->hasMany('App\textFolder');
    }
    public function linkFolders()
    {
        return $this->hasMany('App\linkFolder');
    }
}
