<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = [];

    public function menus() {
        return $this->hasMany('App\Menu', 'restaurant_id');
    }

    public function devices() {
        return $this->hasMany('App\Device', 'restaurant_id');
    }

    public function orders() {
        return $this->hasMany('App\Order', 'restaurant_id');
    }
}
