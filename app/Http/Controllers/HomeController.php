<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('home', []);
    }

    function closeSession(){
        session_destroy();
        return redirect()->route('login');
    }
}
