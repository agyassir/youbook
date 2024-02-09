<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categorie;
class authController extends Controller
{
    //
    
    public function login(){
        

        return view('auth.login');
        // return view('auth.login');
    }
    public function register(){
        return view('auth.register');

    }

}
