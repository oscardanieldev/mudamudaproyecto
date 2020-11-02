<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Foto;
use App\Post;
use App\Categoria;
use App\Subcategoria;
use App\Tipo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GamingController extends Controller
{

//-------------------ALL-----------------------------------    
    public function index(Request $request){
        
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '1')    
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{
        $posts = DB::table('posts')->where('categoria_id', '1')
                                    ->orderBy('id', 'desc')
                                    ->paginate(15);
        }
        return view('/gaming/all', compact('posts'));
    }


//-------------------------NEWS----------------------------------
    public function news(Request $request){

        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '1')    
                                        ->where('tipo_id', '1')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

            
        $posts = DB::table('posts')->where('categoria_id', '1')
                                    ->where('tipo_id', '1')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/gaming/news', compact('posts'));
    }



//--------------------------REVIEWS------------------------

    public function reviews(Request $request){
            
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '1')    
                                        ->where('tipo_id', '2')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

            
        $posts = DB::table('posts')->where('categoria_id', '1')
                                    ->where('tipo_id', '2')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/gaming/reviews', compact('posts'));
    }

}
