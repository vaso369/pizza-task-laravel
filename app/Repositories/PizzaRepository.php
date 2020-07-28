<?php

namespace App\Repositories;

use App\Models\Pizza;
use App\Services\ConverterService;



class PizzaRepository extends GenericRepository 
{
    private $converter;
    public function __construct(Pizza $pizza, ConverterService $converter) {
        $this->converter = $converter;
        parent::__construct($pizza);
    }
    public function getAllPizzas(){
        $pizzas= $this->model->select('id','name','description','image_thumb_path');
        
         if(\Request::get('name')){

            $pizzas = $pizzas->where('name', 'like', '%' . \Request::get('name') . '%');
        }
       
        $pizzas=$pizzas->paginate($this->per_page);
        foreach($pizzas as $pizza){
            $pizza->ingredients=$pizza->ingredients()->select('name')->get();
            $pizza->sizes=$pizza->sizes()->select('size','price')->get();
            if(\Request::get('currency')==='usd'){
                foreach($pizza->sizes as $pizzaSize ){
                    $pizzaSize->price =  $this->converter->convert($pizzaSize->price,'EUR','USD');
                   
                  
                }
            }
            
        }

        return $pizzas;
    }
    public function getPizzaById($id)
    {
 
        $pizza= $this->model->select('id','name','description','image_path')->findOrFail($id);
  
  
            $pizza->ingredients=$pizza->ingredients()->select('name')->get();
            $pizza->sizes=$pizza->sizes()->select('size','price','size_id')->get();
        

        return $pizza;
    }

}

