<?php

namespace App\Repositories;

use App\Models\Pizza;
use App\CurrencyConverter\ExchangeRate;



class PizzaRepository extends GenericRepository 
{
    public function __construct(Pizza $pizza,ExchangeRate $converter) {
        parent::__construct($pizza,$converter);
    }

}

