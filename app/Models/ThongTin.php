<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThongTin extends Model
{
    protected $table = "thong_tin";
    protected $primaryKey = "ma_so";
    // protected $for

    public function user(){
    	return $this->belongsTo('App\User','ma_so','ma_so');
    }
}
