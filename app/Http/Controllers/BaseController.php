<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $service;
    public function __construct($service){
        $this->service = $service;
    }
}
