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

class AnimeController extends Controller
{

//------------------------ALL-----------------------

    public function index(Request $request){
        $buscandos = $request->get('buscando');
        if($buscandos){
            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('categoria_id', '4')    
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);
        }
        else{
        $posts = DB::table('posts')->where('categoria_id', '4')
                                    ->orderBy('id', 'desc')
                                    ->paginate(15);
        }
        return view('/anime/all', compact('posts'));
    }

//------------------------ANIME-----------------------

        public function anime(Request $request){
                
            $buscandos = $request->get('buscando');
            if($buscandos){
                $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                            ->where('categoria_id', '4')    
                                            ->where('subcategoria_id', '7')
                                            ->orderBy('id', 'desc')
                                            ->paginate(15);
            }
            else{
    
            $posts = DB::table('posts')->where('categoria_id', '4')
                                         ->where('subcategoria_id', '7')
                                        ->orderBy('id', 'desc')
            
                                        ->paginate(15);
            }
            return view('/anime/anime', compact('posts'));
        }

//------------------------MANGA-----------------------

        public function manga(Request $request){
                
            $buscandos = $request->get('buscando');
            if($buscandos){
                $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                            ->where('categoria_id', '4')    
                                            ->where('subcategoria_id', '8')
                                            ->orderBy('id', 'desc')
                                            ->paginate(15);
            }
            else{
    
            $posts = DB::table('posts')->where('categoria_id', '4')
                                         ->where('subcategoria_id', '8')
                                        ->orderBy('id', 'desc')
            
                                        ->paginate(15);
            }
            return view('/anime/manga', compact('posts'));
        }

//------------------------NEWS-----------------------

        public function news(Request $request){
                
            $buscandos = $request->get('buscando');
            if($buscandos){
                $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                            ->where('categoria_id', '4')    
                                            ->where('tipo_id', '1')
                                            ->orderBy('id', 'desc')
                                            ->paginate(15);
            }
            else{
    
            $posts = DB::table('posts')->where('categoria_id', '4')
                                         ->where('tipo_id', '1')
                                        ->orderBy('id', 'desc')
            
                                        ->paginate(15);
            }
            return view('/anime/news', compact('posts'));
        }


//------------------------REVIEWS-----------------------

        public function reviews(Request $request){
                
            $buscandos = $request->get('buscando');
            if($buscandos){
                $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                            ->where('categoria_id', '4')    
                                            ->where('tipo_id', '2')
                                            ->orderBy('id', 'desc')
                                            ->paginate(15);
            }
            else{
    
            $posts = DB::table('posts')->where('categoria_id', '4')
                                         ->where('tipo_id', '2')
                                        ->orderBy('id', 'desc')
            
                                        ->paginate(15);
            }
            return view('/anime/reviews', compact('posts'));
        }


}
