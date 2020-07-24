<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends BaseModel
{
    protected $table = 'pizza_order';
    public $timestamps=false;
    protected $fillable = ['order_id','pizza_id','size_id','quantity','total_price'];


}
