<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    protected $fillable = [
        'user_id', 'nama_produk' ,'harga', 'stok', 'descripsi', 'gambar'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function pembeli(){
        return $this->belongsToMany('App\Pembeli');
    }
}
