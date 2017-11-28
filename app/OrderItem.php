<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $guarded = [];

    public function dish() {
        return $this->belongsTo('App\Dish', 'dish_id');
    }

    public function order() {
        return $this->belongsTo('App\Order', 'order_id');
    }
}
