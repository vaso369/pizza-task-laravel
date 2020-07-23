<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public function order_lines()
    {
        return $this->hasMany('App\Models\OrderLine');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
