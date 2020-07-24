<?php 
namespace App\Services;

use Illuminate\Support\Carbon;
use App\CurrencyConverter\ExchangeRate;

class ConverterService {
    private $converter;
    public function __construct(ExchangeRate $converter){
        $this->converter = $converter;
    }
    public function convert($price) {
        return number_format((float)$this->converter->convert($price, 'EUR', 'USD', Carbon::today()), 2, '.', '');
    }
}