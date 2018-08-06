<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('add-user','UserController@getAddUser');
// Route::post('add-user','UserController@postAddUser');

Route::get('login','UserController@getLogin');
Route::post('login','UserController@postLogin');


Route::group(['prefix' => 'sinhvien', 'middleware' => 'sinhVienLogin'], function(){
	Route::get('tongquan','SinhVienController@getTongQuan');
	Route::get('lophoc','SinhVienController@getLopHoc');
	Route::get('diemdanh','SinhVienController@getDiemDanh');
	Route::get('thongtin','SinhVienController@getThongTinSinhVien');
	Route::get('logout','UserController@getLogout');
});


Route::get('quan-ly/login','QuanLyController@getLogin');
Route::post('quan-ly/login','QuanLyController@postLogin');
Route::group(['prefix' => 'quan-ly','middleware' => 'quanLyLogin'], function(){

	Route::get('tong-quan','QuanLyController@getTongQuan');

	Route::get('add-user/{ma_lop}','QuanLyController@getAddUser');
	Route::post('add-user/{ma_lop}','QuanLyController@postAddUser');

	Route::get('danh-sach-sinh-vien/{ma_lop}','QuanLyController@getDanhSachSinhVien');

	Route::get('cap-nhat/{id}','QuanLyController@getCapNhat');
	Route::post('cap-nhat/{id}','QuanLyController@postCapNhat');

	Route::get('xoa-sinh-vien/{id}','QuanLyController@getXoaSinhVien');
});
