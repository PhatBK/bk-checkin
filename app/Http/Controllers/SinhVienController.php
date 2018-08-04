<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\ThongTin;
use App\Models\MonHoc;
use App\Models\LopHoc;
use App\Models\KeHoach;
use App\Models\DiemDanh;
use App\Models\LichSu;
use App\Models\NgayNghi;


class SinhVienController extends Controller
{
    public function getTongQuan(){
    	$monhocs = MonHoc::all();
    	$lophocs = LopHoc::all();

    	return view('sinhvien.lophoc');
    }
    public function getLopHoc(){
    	return view('sinhvien.lophoc');
    }
   
}
