<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'jenis_kelamin', 'alamat', 'posisi', 'token'
    ];

    public function pengusaha(){
        return $this->hasOne('App\Pengusaha');
    }

    public function pembeli(){
        return $this->hasOne('App\Pembeli');
    }

    public function barang(){
        return $this->hasMany('App\Barang');
    }
}
