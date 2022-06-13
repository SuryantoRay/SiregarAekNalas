<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'judul', 'kategori', 'isi', 'gambar', 'teks'
    ];
}
