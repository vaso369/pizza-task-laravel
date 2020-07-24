<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    public function __construct(UserService $service){
        parent::__construct($service);
    }

    public function register(RegisterRequest $request){
        return $this->service->register($request);
    }


}
