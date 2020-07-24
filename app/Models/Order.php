<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends BaseModel
{
    protected $table = 'orders';
    protected $fillable = ['address','phone','additional_info','user_id','payment','status','price_eur','price_usd'];
    public function order_lines()
    {
        return $this->hasMany('App\Models\OrderLine');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function sizes()
    {
        return $this->belongsToMany('App\Models\Size');
    }

}
