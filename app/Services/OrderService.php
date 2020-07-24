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
    // public function getAll(){
    //     try{
    //        // $id=auth('api')->user()->id;
    //         return $this->repository->getAllPizzas();
    //     }
    //     catch(Exception $ex){
    //         return response(['message'=>$ex->getMessage()]);
    //     }
     
            // if($users==null){
            // throw new EntityNotFoundException(Auth::id(),'User');
            // }
            
        
       
       
        
    // }
    // public function getById($id){
    //     try{
    //        // $id=auth('api')->user()->id;
    //         return $this->repository->getPizzaById($id);
    //     }
    //     catch(Exception $ex){
    //         return response(['message'=>$ex->getMessage()]);
    //     }
     
    //         // if($users==null){
    //         // throw new EntityNotFoundException(Auth::id(),'User');
    //         // }
            
        
       
       
        
    // }
}