<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;

class OrderController extends Controller
{
    public function __construct(OrderService $service){
        parent::__construct($service);
    }
    public function getAllOrders(){
        return $this->service->getAll();
    }
}
