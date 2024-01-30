<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(){
        return view('register');
    }

    public function authenticate(Request $request){
        $Fname = $request['Fname'];
        $Lname = $request['Lname'];
        return view('welcome' , ["Fname"=> $Fname, "Lname" => $Lname]);
    }
}
