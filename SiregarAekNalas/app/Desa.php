<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';

    protected $fillable = [
        'negara', 'provinsi', 'kabupaten', 'kecamatan', 'kodepos'
    ];
}
