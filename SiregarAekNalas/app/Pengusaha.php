<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengusaha extends Model
{
    protected $table = 'pengusaha';

    protected $fillable = [
        'user_id','nama','tanggal_lahir','no_handphone','whatsapps', 'file'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }
}
