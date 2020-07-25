<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $hidden = ['pivot'];
    public function sizes()
    {
        return $this->belongsToMany('App\Models\Pizza','size_pizza');
    }
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order','size_pizza');
    }
}
