<?php 
namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Response;

use Exception;

class UserService {
    private $repository;
    public function __construct(UserRepository $userRepository){
        $this->repository = $userRepository;
    }
    public function register($request){
        try{
           $isInserted = $this->repository->register($request);
           if($isInserted){
               return Response::make('',201);
           }
        }catch(Exception $ex){
            return response(['message'=>$ex->getMessage()]);
        }
         
    }

 
}