<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomerRepository{
    
    /**
     * @var User
     */
    protected $user;

    /**
     * CustomerRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function filter($filters, $pagination_option)
    {   
        $customerList = $this->user;
        foreach ($filters as $filter => $search_word) {
            $customerList = $customerList->where($filter,'LIKE', '%'.$search_word.'%');
        }
        return $customerList->paginate($pagination_option);  
    }


}

?>