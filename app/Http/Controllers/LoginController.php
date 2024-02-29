<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\logUser;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('login', []);
    }

    function logearse(logUser $request){
     

        $user = User::where('name', $request['name'])->first();

        if($user && password_verify($request['password'], $user->password)){
            session(['name' => $request['name']]);
            $data = $request->session()->all();
            return $data;
        }
        else{
            return view('login', []);
        }
    }
}
