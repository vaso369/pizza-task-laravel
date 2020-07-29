<?php 
namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;



use Exception;

class UserService {
    private $repository;
    private $userJson;
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
           $user = $this->repository->getUser($request);
           $this->JWTtoken($user);
           return response($this->userJson);
         }catch(Exception $ex){
            return response(['message'=>$ex->getMessage()],500);
         }
    }
    public function JWTtoken($user)
    {
        $secret_key = "YOUR_SECRET_KEY";
        $issuer_claim = "THE_ISSUER";
        $audience_claim = "THE_AUDIENCE";
        $issuedat_claim = time();
        $notbefore_claim = $issuedat_claim;
        $expire_claim = $issuedat_claim + 1200;
        $token = array(
            "iss" => $issuer_claim,
            "aud" => $audience_claim,
            "iat" => $issuedat_claim,
            "nbf" => $notbefore_claim,
            "exp" => $expire_claim,
        );

        $jwt = JWT::encode($token, $secret_key);
        $userJson = array(
                "message" => "Successful login.",
                "token" => $jwt,
                "expireAt" => $expire_claim,
                "user" => $user,
            );
        $this->userJson = $userJson;

    }
    public function logout(){ 
        
            if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
            }
    }

 
}