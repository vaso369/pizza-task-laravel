<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
