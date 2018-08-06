<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeHoach extends Model
{
    protected $table = "ke_hoach";

    public function user(){
    	return $this->belongsTo('App\User','ma_so','ma_so');
    }
    public function lopHoc(){
    	return $this->belongsTo('App\Models\LopHoc','ma_lop','ma_lop');
    }
}
