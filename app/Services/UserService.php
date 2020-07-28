<?php 
namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;


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
            return response(['message'=>$ex->getMessage()],500);
        }
         
    }
    public function login($request){

        try{
            $login=['email'=>$request->input('email'),'password'=>$request->input('password')];
            if(!Auth::attempt($login)){
                return response(['message'=>'Invalid credentials'],401);
            }

            $accessToken = Auth::user()->createToken('authToken')->accessToken;
            $user = ['first_name'=>Auth::user()->first_name,'last_name'=>Auth::user()->last_name,'email'=>Auth::user()->email,'role_id'=>Auth::user()->role_id];
            return response(['user'=>$user,'accessToken'=>$accessToken]);
         }catch(Exception $ex){
            return response(['message'=>$ex->getMessage()],500);
         }
    }

 
}