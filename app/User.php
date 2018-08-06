<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'ma_so', 'email','username', 'password','level',
    ];
    // protected $primaryKey = "ma_so";
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function diemDanh(){
        return $this->hasMany('App\Models\DiemDanh','ma_so','ma_so');
    }
    public function keHoach(){
        return $this->hasMany('App\Models\KeHoach','ma_so','ma_so');
    }

    public function ngayNghi(){
        return $this->hasManyThrough('App\Models\NgayNghi', 'App\Models\DiemDanh');
    }

    public function lopHoc() {
        return $this->belongsToMany('App\Models\LopHoc');
    }
}
