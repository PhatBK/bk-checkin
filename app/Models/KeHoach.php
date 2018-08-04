<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeHoach extends Model
{
    protected $table = "ke_hoach";
    protected $primaryKey = "ma_so"

    public function user(){
    	return $this->belongsTo('App\User','ma_so');
    }
    public function lopHoc(){
    	return $this->belongsTo('App\Models\LopHoc','ma_lop');
    }
}
