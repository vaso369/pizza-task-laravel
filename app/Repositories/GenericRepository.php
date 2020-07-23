<?php

namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;

class GenericRepository
{
    private $model;
    private $converter;
    public function __construct( $model,$converter) {
        $this->model = $model;
        $this->converter = $converter;
    }
    public function getAll()
    {
        $per_page = 3;
        $pizzas= $this->model->select('id','name','description','image_thumb_path');
        if(\Request::get('per_page')){
            $per_page=\Request::get('per_page');
        }
         if(\Request::get('name')){

            $pizzas = $pizzas->where('name', 'like', '%' . \Request::get('name') . '%');
        }
       
        $pizzas=$pizzas->paginate($per_page);
        foreach($pizzas as $pizza){
            $pizza->ingredients=$pizza->ingredients()->select('name')->get();
            $pizza->sizes=$pizza->sizes()->select('size','price')->get();
            if(\Request::get('currency')==='usd'){
                foreach($pizza->sizes as $pizzaSize ){
                    $pizzaSize->price =  number_format((float)$this->converter->convert($pizzaSize->price, 'EUR', 'USD', Carbon::today()), 2, '.', '');
                   
                  
                }
            }
            
        }

        return $pizzas;
    }

    public function getById($id)
    {
 
        $pizza= $this->model->select('id','name','description','image_path')->findOrFail($id);
  
  
            $pizza->ingredients=$pizza->ingredients()->select('name')->get();
            $pizza->sizes=$pizza->sizes()->select('size','price')->get();
        

        return $pizza;
    }

}

