<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends BaseModel
{
    protected $table = 'users';
    protected $fillable = ['first_name','last_name','email','password','role_id','is_active'];
    use SoftDeletes;
    public $timestamps = false;
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    
}
