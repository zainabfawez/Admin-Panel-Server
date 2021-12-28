<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\filterRequest;

use App\Services\CustomerService;
use Exception;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    protected $customerService;

   
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function filterCustomers (filterRequest $request, $pagination_option = 10)
    {
        $result = ['status' => 200];
        $filters = $request->validated();
        try {
            $result['data'] = $this->customerService->filter($filters, $pagination_option);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }
 
}

?>