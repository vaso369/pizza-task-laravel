<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizzas';
    public function ingredients()
    {
        return $this->hasMany('App\Models\PizzaIngredient');
    }
}
