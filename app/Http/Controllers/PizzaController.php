<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PizzaService;


class PizzaController extends BaseController
{
    public function __construct(PizzaService $service){
        parent::__construct($service);
    }
    public function getAllPizzas(){
        return $this->service->getAll();
    }
    public function getPizzaById($id){
        return $this->service->getById($id);
    }
}
