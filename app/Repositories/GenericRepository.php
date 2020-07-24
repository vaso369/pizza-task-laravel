<?php

namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

class GenericRepository
{
    protected $model;
    protected $per_page = 3;
    public function __construct( $model) {
        $this->model = $model;
        if(\Request::get('per_page')){
            $this->per_page=\Request::get('per_page');
        }
    }
    public function getAll()
    {
       return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

}

