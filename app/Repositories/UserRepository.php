<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;



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
    public function getUser($request){
        $user = $this->model->where([['email',$request->email]])->firstOrFail();
        $exist = Hash::check($request->password,$user->password);
        if($exist){
            return $this->model->select('id','first_name','last_name','email')->where('id',$user->id)->firstOrFail();
        }
    }
   

}

