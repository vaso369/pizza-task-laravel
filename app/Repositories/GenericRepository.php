<?php

namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

class GenericRepository
{
    private $model;
    public function __construct( $model) {
        $this->model = $model;
    }
    public function getAll()
    {
        if(\Request::get('per_page')){
            $per_page=\Request::get('per_page');
        }
       else{
        $per_page = 3;
       } 
        $pizzas= $this->model->select('id','name','description','image_thumb_path')->paginate($per_page);
        foreach($pizzas as $pizza){
            $pizza->ingredients=$pizza->ingredients()->select('name')->get();
            $pizza->sizes=$pizza->sizes()->select('size','price')->get();
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

