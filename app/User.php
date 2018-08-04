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
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function thongTin(){
        return $this->hasOne('App\Models\ThongTin','ma_so','ma_so');
    }
    public function diemDanh(){
        return $this->hasMany('App\Models\DiemDanh','ma_so','ma_so');
    }
    public function keHoach(){
        return $this->hasMany('App\Models\KeHoach','ma_so','ma_so');
    }
}
