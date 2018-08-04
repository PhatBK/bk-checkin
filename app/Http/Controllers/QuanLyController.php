<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuanLyController extends Controller
{
    public function getTongQuan(){
    	return view('quanly');
    }
}
