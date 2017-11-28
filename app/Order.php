<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function orderItems() {
        return $this->hasMany('App\OrderItem');
    }

    public function device() {
        return $this->belongsTo('App\Device', 'device_id');
    }

    public function restaurant() {
        return $this->belongsTo('App\Restaurant', 'restaurant_id');
    }
}
