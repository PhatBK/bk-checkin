<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiemDanh extends Model
{
    protected $table = "diem_danh";

    public function user() {
    	return $this->belongsTo('App\User','ma_so','ma_diem_danh');
    }
    public function lopHoc(){
    	return $this->belongsTo('App\Models\LopHoc','ma_lop','ma_diem_danh');
    }
    public function ngayNghi(){
    	return $this->hasMany('App\Models\NgayNghi','ma_diem_danh','ma_ngay_nghi');
    }
}
