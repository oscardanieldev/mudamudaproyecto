<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //
    protected $fillable=['ruta_foto'];
    public function posts()
    {
        return $this->hasMany('App\Post', 'imagen1');
        

    }
}
