<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\AdminCredentialRequest;
use App\Models\User;

class UserController extends Controller
{
    //

    public function authenticate(AdminCredentialRequest $request)
    {
        $validate = $request->validated();

        $user = User::where('email','=',$request['email'])
        ->where('password','=',$request['password'])
        ->first();

        $error_response =  ['message' => "Incorrect credential given"];
        if($user == null) return response()->BaseResponse('401','', $error_response);
        return response()->BaseResponse('200','','User Authenticated');
    }
}
