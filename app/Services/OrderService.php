<?php 
namespace App\Services;
use App\Repositories\OrderRepository;
use Exception;

class OrderService {
    private $repository;
    public function __construct(OrderRepository $orderRepository){
        $this->repository = $orderRepository;
    }
        public function getAll(){
            return $this->repository->getAllOrders();
        }
   public function makeOrder($request){
       return $this->repository->makeOrder($request);
   }
}