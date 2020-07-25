<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizzas';
    protected $hidden = ['pivot'];
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient');
    }
    public function sizes()
    {
        return $this->belongsToMany('App\Models\Size','size_pizza');
    }
    public function order_lines()
    {
        return $this->belongsToMany('App\Models\Order','order_pizza');
    }
}
