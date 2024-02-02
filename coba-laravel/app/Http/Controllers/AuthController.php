<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(){
        return view('pages.register');
    }

    public function authenticate(Request $request){
        $Fname = $request['Fname'];
        $Lname = $request['Lname'];
        return view('pages.welcome' , ["Fname"=> $Fname, "Lname" => $Lname]);
    }
}
