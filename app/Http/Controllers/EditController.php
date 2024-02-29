<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    function index(){
        $consulta = User::where('name', $_SESSION['user'])->get();
        return view('edit', ['consulta' => $consulta]);
    }

    function edittingUser(Request $request){
        
        if($request['email'] == $request['emailOld']){
            $validation = $request->validate([
                'name' => 'required|max:255',
                'password' => 'required|min:4'
            ]);
        }else{
            $validation = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:4'
            ]);
        }
        

        if($request['password'] == $request['passwordConfirm']){
            $userEdit = User::find($request['id']);
            $userEdit->name = $request['name'];
            $userEdit->email = $request['email'];
            $userEdit->password = $request['password'];
            $userEdit->save();
            $_SESSION['user']['name'] = $request['name'];
            $_SESSION['user']['password'] = $request['password'];
            return redirect()->route('home');
        }else{
            return view('edit', []);
        }
    }
}
