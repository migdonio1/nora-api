<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $guarded = [];

    public function menu() {
        return $this->belongsTo('App\Menu', 'menu_id');
    }

    public function orderItems() {
        return $this->hasMany('App\OrderItem');
    }
}
