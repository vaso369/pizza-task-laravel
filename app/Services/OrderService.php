<?php 
namespace App\Services;
use App\Repositories\OrderRepository;
use Exception;

class OrderService {
    private $repository;
    public function __construct(OrderRepository $orderRepository){
        $this->repository = $orderRepository;
    }
        public function getUserOrders(){
            return $this->repository->getUserOrders();
        }
   public function makeOrder($request){
       return $this->repository->makeOrder($request);
   }
}