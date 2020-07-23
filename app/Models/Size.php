<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    public function ingredients()
    {
        return $this->hasMany('App\Models\PizzaSize');
    }
}
