<?php 
namespace App\Services;
use App\Repositories\UserRepository;
use Exception;

class UserService {
    private $repository;
    public function __construct(UserRepository $userRepository){
        $this->repository = $userRepository;
    }
    public function register($request){
        return $this->repository->register($request);
    }

 
}