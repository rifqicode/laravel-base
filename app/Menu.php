<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function user()
    {
      return $this->hasOne('App\User');
    }

    // public function parent()
    // {
    //     return $this->belongsTo('App\Menu', 'menu_parent_id');
    // }
    //
    // public function children()
    // {
    //     return $this->hasMany('App\Menu', 'id' , 'menu_parent_id');
    // }
}
