<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function restaurant() {
        return $this->belongsTo('App\Restaurant', 'restaurant_id');
    }

    public function devices() {
        return $this->hasMany('App\Device');
    }

    public function dishes() {
        return $this->hasMany('App\Dish');
    }
}
