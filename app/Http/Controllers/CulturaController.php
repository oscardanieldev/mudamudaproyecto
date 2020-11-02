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

class CulturaController extends Controller
{
    public function index(Request $request){
        
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '3')    
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{
        $posts = DB::table('posts')->where('categoria_id', '3')
                                    ->orderBy('id', 'desc')
                                    ->paginate(15);
        }
        return view('/cultura/all', compact('posts'));
    }

//------------------------CINE------------------------------
    public function cine(Request $request){
            
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '3')    
                                        ->where('subcategoria_id', '1')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

        $posts = DB::table('posts')->where('categoria_id', '3')
                                     ->where('subcategoria_id', '1')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/cultura/cine', compact('posts'));
    }
//------------------------MUSEOS------------------------------


    public function museos(Request $request){
            
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '3')    
                                        ->where('subcategoria_id', '2')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

        $posts = DB::table('posts')->where('categoria_id', '3')
                                     ->where('subcategoria_id', '2')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/cultura/museos', compact('posts'));
    }

//------------------------MÚSICA------------------------------


    public function musica(Request $request){
            
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '3')    
                                        ->where('subcategoria_id', '3')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

        $posts = DB::table('posts')->where('categoria_id', '3')
                                     ->where('subcategoria_id', '3')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/cultura/musica', compact('posts'));
    }

//------------------------CONCIERTOS------------------------------

    public function conciertos(Request $request){
            
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '3')    
                                        ->where('subcategoria_id', '4')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

        $posts = DB::table('posts')->where('categoria_id', '3')
                                     ->where('subcategoria_id', '4')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/cultura/conciertos', compact('posts'));
    }

//------------------------ENSAYOS------------------------------
    public function ensayos(Request $request){
                
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '3')    
                                        ->where('subcategoria_id', '5')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

        $posts = DB::table('posts')->where('categoria_id', '3')
                                     ->where('subcategoria_id', '5')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/cultura/ensayos', compact('posts'));
    }

//--------------------------Tv&Series----------------------

    public function tvyseries(Request $request){
                
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '3')    
                                        ->where('subcategoria_id', '6')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

        $posts = DB::table('posts')->where('categoria_id', '3')
                                     ->where('subcategoria_id', '6')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/cultura/tv&series', compact('posts'));
    }

//-------------------------NEWS--------------------

    public function news(Request $request){
                
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '3')    
                                        ->where('tipo_id', '1')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

        $posts = DB::table('posts')->where('categoria_id', '3')
                                     ->where('tipo_id', '1')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/cultura/news', compact('posts'));
    }

//-------------------------REVIEWS---------------------

    public function reviews(Request $request){
                
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '3')    
                                        ->where('tipo_id', '2')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{

        $posts = DB::table('posts')->where('categoria_id', '3')
                                     ->where('tipo_id', '2')
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        }
        return view('/cultura/reviews', compact('posts'));
    }


}
