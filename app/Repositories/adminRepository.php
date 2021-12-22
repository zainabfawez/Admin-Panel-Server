<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminRepository{
    
    /**
     * @var User
     */
    protected $user;

    /**
     * AdminRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function notMe()
    {   
        $id = auth()->user()->id;
        return $this->user
            ->where('id','<>', $id);     
    }

    public function isCustomer()
    {
        return $this->user->where('user_type','=',2);
    }

    public function getByFirstName($first_name){
        return $this->user->where('first_name','LIKE', $first_name)
                    ->get();
    }

    public function getByEmail($email)
    {
        return $this->user->where('email','LIKE', $email)
                    ->get();
    }

    public function select(){
        return $this->user->select('first_name', 'last_name', 'email');               
    }

}

?>