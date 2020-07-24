<?php 
namespace App\Services;
use App\Repositories\PizzaRepository;
use Exception;

class PizzaService {
    private $repository;
    public function __construct(PizzaRepository $pizzaRepository){
        $this->repository = $pizzaRepository;
    }

    public function getAll(){
        try{
           // $id=auth('api')->user()->id;
            return $this->repository->getAllPizzas();
        }
        catch(Exception $ex){
            return response(['message'=>$ex->getMessage()]);
        }
     
            // if($users==null){
            // throw new EntityNotFoundException(Auth::id(),'User');
            // }
            
        
       
       
        
    }
    public function getById($id){
        try{
           // $id=auth('api')->user()->id;
            return $this->repository->getPizzaById($id);
        }
        catch(Exception $ex){
            return response(['message'=>$ex->getMessage()]);
        }
     
            // if($users==null){
            // throw new EntityNotFoundException(Auth::id(),'User');
            // }
            
        
       
       
        
    }
}