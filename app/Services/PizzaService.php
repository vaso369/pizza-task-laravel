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
     
            return $this->repository->getAllPizzas();
        }
        catch(Exception $ex){
            return response(['message'=>$ex->getMessage()],500);
        }

    }
    public function getById($id){
        
        try{
            return $this->repository->getPizzaById($id);
        }
        catch(Exception $ex){
            return response(['message'=>$ex->getMessage()],500);
        }
 
    }
}