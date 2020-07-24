<?php

namespace App\Repositories;

use App\Models\Order;



class OrderRepository extends GenericRepository 
{
    public function __construct(Order $order) {
        parent::__construct($order);
    }
   public function getAllOrders(){
       return 123;
   }

}

