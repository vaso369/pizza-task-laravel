<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

    protected $table = 'ingredients';
    protected $hidden = ['pivot'];
    public function pizzas()
    {
        return $this->belongsToMany('App\Models\Pizza');
    }
}
