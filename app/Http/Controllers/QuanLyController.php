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
use Illuminate\Validation;

class QuanLyController extends Controller
{
	// lấy giao diện đăng nhập cho quản lý
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
    		return redirect('quan-ly/login');
    	}
    }

    // đăng xuất khỏi trang quản lý
    public function getLogout(){
    	Auth::logout();
    	return redirect('quan-ly/login');
    }

    // lấy tất cả các lớp học để hiển thị trong trang quản lý
    public function getTongQuan(){
    	$lophocs = LopHoc::all();
    	$danhsach_sinhviens = [];

    	return view('quanly.quanly',[
    		'lophocs' => $lophocs,
    	]);
    }

    // thêm sinh viên mới chưa có trong danh sách
    public function getAddUser($ma_lop){
    	return view('quanly.addUser',['ma_lop' => $ma_lop]);
    }
    public function postAddUser(Request $req,$ma_lop){
    	$this->validate($req,
    		[
    			'ma_so' 		=> 'required|unique:users,ma_so|min:8',
    			'username' 		=> 'required|unique:users',
    			'email' 		=> 'required|unique:users',
    			'password' 		=> 'required',
    			'confirmPass' 	=> 'required|same:password'
    		],
    		[
    			'ma_so.required' 		=> 'Chưa Nhập Mã Số Sinh Viên',
    			'ma_so.unique' 			=> 'Mã Số Này Đã Tồn Tại, vui lòng thử lại mã khác',
    			'ma_so.min'  			=> 'Mã số cần có ít độ dài nhỏ nhất là 8 số',

    			'username.required' 	=> 'Chưa nhập tên đăng nhập cho tài khoản',
    			'username.unique' 		=> 'Tên đăng nhập đã tồn tại, thử tên khác',

    			'email.required'		=> 'Chưa Nhập Email',
    			'email.unique'			=> 'Email này đã tồn tại, vui long nhập email khác',

    			'password.required' 	=> 'Chưa nhập mật khẩu',

    			'confirmPass.required'	=> "Chưa Xác nhận mật khẩu",
    			'confirmPass.same' 		=> "Xác nhận mật khẩu không đúng"

    		]);
    	
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

    	
    	return redirect('quan-ly/danh-sach-sinh-vien/'.$ma_lop);
    }

    // sửa thông tin tài khoản của sinh viên
    public function getCapNhat($id, $ma_lop){
    	$sinhvien = User::find($id);
    	return view('quanly.capnhat',[
    		'sinhvien' => $sinhvien,
    		'ma_lop' => $ma_lop,
    	]);
    }
    public function postCapNhat(Request $req, $id, $ma_lop){

    	$user = User::find($id);

    	if($req->ma_so != $user->ma_so && 
    	  ($req->username == $user->username) &&
    	  ($req->email == $user->email) ){
    		$this->validate($req,
	    		[
	    			'ma_so' => 'required|unique:users,ma_so|min:8'
	    		],
	    		[

	    			'ma_so.required' 		=> 'Chưa Nhập Mã Số Sinh Viên',
	    			'ma_so.unique' 			=> 'Mã Số Này Đã Tồn Tại, vui lòng thử lại mã khác',
	    			'ma_so.min'  			=> 'Mã số cần có ít độ dài nhỏ nhất là 8 số',
	    		]);
    	}else if($req->username != $user->username && 
    			($req->ma_so == $user->ma_so) &&
    			($req->email == $user->email)){
    		$this->validate($req,
	    		[
	    			'username' 		=> 'required|unique:users',
	    		],
	    		[
	    			'username.required' 	=> 'Chưa nhập tên đăng nhập cho tài khoản',
	    			'username.unique' 		=> 'Tên đăng nhập đã tồn tại, thử tên khác',
	    		]);

    	}else if($req->email != $user->email &&
    			($req->ma_so == $user->ma_so) &&
    			($req->username == $user->username)){
    		$this->validate($req,
	    		[
	    			'email' 		=> 'required|unique:users',
	    		],
	    		[
	    			'email.required'		=> 'Chưa Nhập Email',
	    			'email.unique'			=> 'Email này đã tồn tại, vui long nhập email khác'
	    		]);

    	}else if($req->username == $user->username && 
    			($req->ma_so == $user->ma_so) &&
    			($req->email == $user->email)){
    	}else{
    		$this->validate($req,
	    		[
	    			'ma_so' 		=> 'required|unique:users,ma_so|min:8',
	    			'username' 		=> 'required|unique:users',
	    			'email' 		=> 'required|unique:users',
	    		],
	    		[
	    			'ma_so.required' 		=> 'Chưa Nhập Mã Số Sinh Viên',
	    			'ma_so.unique' 			=> 'Mã Số Này Đã Tồn Tại, vui lòng thử lại mã khác',
	    			'ma_so.min'  			=> 'Mã số cần có ít độ dài nhỏ nhất là 8 số',

	    			'username.required' 	=> 'Chưa nhập tên đăng nhập cho tài khoản',
	    			'username.unique' 		=> 'Tên đăng nhập đã tồn tại, thử tên khác',

	    			'email.required'		=> 'Chưa Nhập Email',
	    			'email.unique'			=> 'Email này đã tồn tại, vui long nhập email khác',

	    		]);
    	}

        $user->ma_so        =	$req->ma_so;
    	$user->username     =	$req->username;

        if($req->changePass == "on"){
    		$this->validate($req,
    			[
    				'password' 		=> 'required',
    				'confirmPass' 	=> 'required|same:password',
    			],
    			[
    				'password.required' 	=> 'Chưa Nhập Password',
    				'confirmPass.required' 	=> 'Chưa xác nhận mật khẩu',
    				'confirmPass.same' 		=> 'Mật khẩu xác nhận không đúng',
    			]);
    		$user->password     =   bcrypt($req->password);
    	}

    	$user->email        = 	$req->email;
    	$user->level        = 	$req->level;
    	$user->ho_ten 		=   $req->hoten;
    	$user->khoa_vien    =   $req->khoavien;
    	$user->khoa         =   $req->khoa;

    	$user->save();
    	 return redirect('quan-ly/danh-sach-sinh-vien/'.$ma_lop);
    	
    }

    // thêm sinh viên đã có trong danh sách
    public function getAddUserDanhSach($ma_lop){
    	return view('quanly.addUserDanhSach');
    }
    public function postAddUserDanhSach(Request $req, $ma_lop){

    }

    // lấy danh sách sinh viên của một lớp học theo mã lớp học
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

    // xóa tài khoản của sinh viên
    public function getXoaSinhVien($id, $ma_lop){

    }
}
