<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = "mon_hoc";
    protected $primaryKey = 'ma_mon';

    public function lopHoc(){
    	return $this->hasMany('App\Models\LopHoc','ma_mon');
    }
}
