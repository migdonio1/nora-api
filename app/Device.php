<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $guarded = [];

    public function menu() {
        return $this->belongsTo('App\Menu', 'menu_id');
    }

    public function restaurant() {
        return $this->belongsTo('App\Restaurant', 'restaurant_id');
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }
}
