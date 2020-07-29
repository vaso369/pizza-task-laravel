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
        
        try{
            return $this->repository->getUserOrders();
        }catch(Exception $ex){
            return response(['message'=>$ex->getMessage()],500);
        }
            
    }

    public function makeOrder($request){

        try{
            return $this->repository->makeOrder($request);
        }catch(Exception $ex){
            return response(['msage'=>$ex->getMessage()],502);
        }
      
    }

   public function convertPrice($request){

        try{
            return $this->repository->convertPrice($request);
        }catch(Exception $ex){
            return response(['message'=>$ex->getMessage()],500);
        }
    
    }
}