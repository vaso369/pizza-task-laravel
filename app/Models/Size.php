<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $hidden = ['pivot'];
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Pizza');
    }
}
