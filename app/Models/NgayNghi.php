<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NgayNghi extends Model
{
    protected $table = "ngay_nghi";

    public function diemDanh(){
    	return $this->belongsTo('App\Models\DiemDanh','ma_diem_danh','ma_ngay_nghi');
    }
}
