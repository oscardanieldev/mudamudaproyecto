<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'titulo', 'contenido', 'categoria_id','subcategoria_id','tipo_id','user_id','imagen1','imagen2','descripcion', 
    ];

    public function categoria(){

        return $this->belongsTo('App\Categoria');

    }
    public function subcategoria(){

        return $this->belongsTo('App\Subcategoria');

    }
    public function tipo(){

        return $this->belongsTo('App\Tipo');
        

    }
    public function user(){

        return $this->belongsTo('App\User');
    }
    public function foto(){

        return $this->belongsTo('App\Foto', 'imagen1');
        


    }
    public function segundasfoto(){

        return $this->belongsTo('App\Segundasfoto', 'imagen2');
        


    }

    

}
