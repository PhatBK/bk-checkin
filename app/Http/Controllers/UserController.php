<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin(){
    	return view('login');
    }
    public function postLogin(Request $request){
    	dd($request->username,$request->password);
    }
}
