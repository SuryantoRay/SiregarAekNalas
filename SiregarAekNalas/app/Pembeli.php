<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';

    protected $fillable = [
        'user_id','nama','tanggal_lahir','no_handphone','whatsapps', 'file'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function barang(){
        return $this->belongsToMany('App\Barang');
    }
}
