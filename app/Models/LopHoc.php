<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = "lop_hoc";
    protected $primaryKey = 'ma_lop';

    public function diemDanh(){
    	return $this->hasMany('App\Models\DiemDanh','ma_lop');
    }
    public function lichSu(){
    	return $this->hasMany('App\Models\LichSu','ma_lop');
    }
    public function keHoach(){
    	return $this->hasMany('App\Models\KeHoach','ma_lop');
    }
    public function monHoc(){
    	return $this->belongsTo('App\Models\MonHoc','ma_mon');
    }
    public function user(){
        return $this->belongsToMany('App\User');
    }
}
