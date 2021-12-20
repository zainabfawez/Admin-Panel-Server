<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Validator;


class adminController extends Controller
{
    public function filterCustomers(Request $request){
        $user_id = auth()->user()->id;
        $search_word ="%".$request->input."%";
        $pagination_option = $request->numberOfRows;
        if ($search_word != ""){
            $customers = User::Search($search_word)
                                ->select("first_name", "last_name", "email")
                                ->notMe($user_id)
                                ->isCustomer()
                                ->paginate($pagination_option);
                          
        }
        if(count($customers)!=0){
            return response()->json($customers, 200);
        }else{
            $response['status'] = "No customers matches your search";
            return response()->json($response, 200);
        }

    }

}
