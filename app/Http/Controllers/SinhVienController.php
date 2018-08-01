<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\ThongTin;


class SinhVienController extends Controller
{
    public function getData(){
    	$result = User::all();
    	$all = [];
    	foreach ($result as $user ) {
    		$all.push($user->thongTin());
    	}
    	return $all;
    }
}
