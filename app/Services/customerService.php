<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\CustomerRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class CustomerService
{
    /**
     * @var $custoemrRepository
     */
    protected $customerRepository;

    /**
     * CustomerService constructor.
     *
     * @param CustomerRepository $CustomerRepository
     */
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }


    public function filter($filters, $pagination_option)
    {
        return $this->customerRepository->filter($filters, $pagination_option);
                   
    }


  
}

?>