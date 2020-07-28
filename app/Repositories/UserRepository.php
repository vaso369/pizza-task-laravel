<?php

namespace App\Repositories;

use App\Models\User;



class UserRepository extends GenericRepository 
{
    public function __construct(User $user) {
        parent::__construct($user);
    }
    public function register($request){

       return $this->model->create([
            'first_name' => $request->firstName,
                'last_name' => $request->lastName,
	            'email' => $request->email,
                'password' => bcrypt($request->password),
                'role_id'=>2
        ]);
    }
   

}

