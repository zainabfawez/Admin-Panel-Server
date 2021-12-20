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
        $search_word ='%'.$request->input."%";
        $user_type = 2;
        //$pagination_option = $request->pagination_option;
        $customers = User::select('first_name','last_name')
                                ->where('user_type', $user_type)
                                ->search($search_word)
                                ->get();
        if($customers){
            return response()->json($customers, 200);
        }else{
            $response['status'] = "No customers matches your search";
            return response()->json($response, 200);
        }

    }

}
