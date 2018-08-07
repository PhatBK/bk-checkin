<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;

class UserController extends Controller
{
	public $deparment = ['Quản Lý','Giảng Viên','Sinh Viên'];

    public function getLogin(){
    	return view('login');
    }
    public function getLogout(){
        Auth::logout();
    	return redirect('login');
    }
    public function postLogin(Request $req){
        $credentials = $req->only('username','password');
    	if(Auth::attempt(
            $credentials
         )){
            return redirect('sinhvien/tongquan');
    	}else{
    		return redirect('login');
    	}

    }

    public function getAddUser(){
    	return view('addUser');
    }
    public function postAddUser(Request $req){
    	$user = new User;
        // $user->id = rand(1000000,99999999);
    	$user->ma_so        =	$req->ma_so;
    	$user->username     =	$req->username;
    	// $user->password     =	encrypt($req->password);
        $user->password     =   bcrypt($req->password);
    	$user->email        = 	$req->email;
    	$user->level        = 	$req->level;

    	$user->save();
    	return redirect('login');
    }
}
