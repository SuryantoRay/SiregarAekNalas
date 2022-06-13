<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'barang_pembeli';

    protected $fillable = [
        'pembeli_id', 'barang_id', 'jumlah_pesanan', 'total'
    ];
}
