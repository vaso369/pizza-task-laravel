<?php

namespace App\Repositories;

use App\Models\Pizza;


class PizzaRepository extends GenericRepository 
{
    public function __construct(Pizza $pizza) {
        parent::__construct($pizza);
    }

}

