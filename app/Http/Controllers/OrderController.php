<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function __construct(OrderService $service){
        parent::__construct($service);
    }
    public function getUserOrders(){
        return $this->service->getUserOrders();
    }
    public function makeOrder(OrderRequest $request){
       return $this->service->makeOrder($request);
    }
    public function convertPrice(Request $request){
        return $this->service->convertPrice($request);
    }
}
