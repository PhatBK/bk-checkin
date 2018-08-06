<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;
use App\Models\LopHoc;
use App\Models\MonHoc;
use App\Models\KeHoach;
use App\Models\ThongTin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanLyController extends Controller
{
    public function getLogin(){
        return view('quanly.login');
    }
    public function postLogin(Request $req){

        $credentials = $req->only('username','password');
    	if(Auth::attempt(
            $credentials
         )){
            return redirect('quan-ly/tong-quan');
    	}else{
            dd("Đăng nhập thất bại, sai: username hoặc password...");
    		return redirect('quan-ly/login');
    	}
    }
    public function getTongQuan(){
    	$lophocs = LopHoc::all();
    	$danhsach_sinhviens = [];

    	// dd($lophocs);
    	return view('quanly.quanly',[
    		'lophocs' => $lophocs,

    	]);
    }
    public function getAddUser($ma_lop){
    	return view('quanly.addUser',['ma_lop' => $ma_lop]);
    }
    public function postAddUser(Request $req,$ma_lop){
    	// dd($req);
    	$user   = new User;
    	$user->ma_so        =	$req->ma_so;
    	$user->username     =	$req->username;
        $user->password     =   bcrypt($req->password);
    	$user->email        = 	$req->email;
    	$user->level        = 	$req->level;
    	$user->ho_ten 		=   $req->hoten;
    	$user->khoa_vien    =   $req->khoavien;
    	$user->khoa         =   $req->khoa;

    	$user->save();

    	$ma_lop = $req->ma_lop;
    	$kehoach = new KeHoach;
    	$kehoach->ma_so = $req->ma_so;
    	$kehoach->ma_lop = $ma_lop;
    	$kehoach->hoc_ky = $req->hocky;

    	$kehoach->save();

    	
    	return redirect('quan-ly/tong-quan');
    }
    public function getDanhSachSinhVien($ma_lop){
    	
    	$lophoc = LopHoc::find($ma_lop);
    	$kehoachs = $lophoc->keHoach;
    	
    	$users = [];
    	foreach ($kehoachs as $kehoach) {
    		$ma_so = $kehoach->ma_so;
    		// $user = DB::table('users')->where('ma_so',$ma_so)->get();
    		$user = $kehoach->user;
    		array_push($users,$user);
    	}
    	$so_luong_sv = count($kehoachs);
    	return view('quanly.danhsach_sinhvien',[
    		'danhsachs' => $users,
    		'lophoc' => $lophoc,
    		'so_luong' => $so_luong_sv,
    	]);
    }

    public function getCapNhat($id){
    	$sinhvien = User::find($id);
    	return view('quanly.capnhat',[
    		'sinhvien' => $sinhvien,
    	]);
    }
    public function postCapNhat(Request $req, $ma_so){

    }
    public function getXoaSinhVien($id){
    	
    }
}
