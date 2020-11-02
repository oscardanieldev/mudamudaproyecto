<?php

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

class AutorController extends Controller
{
    public function index(Request $request){

        $buscandos = $request->get('buscando');
        $buscandopost = $request->get('buscandopost');
        if($buscandos){
            $news = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('tipo_id', '1')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);

            $reviews = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->where('tipo_id', '2')
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);

            $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                        ->orderBy('id', 'desc')
                                        ->paginate(15);

                                        return view('inicio', compact('news','reviews', 'posts'));
        }
        elseif ($buscandopost) {
            $id=Auth::User()->id;

        $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandopost%")
                                    ->where('user_id', $id)
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);
        return view('autor/menu', compact('posts'));
            
        }

        else{

        $id=Auth::User()->id;

        $posts = DB::table('posts')->where('user_id', $id)
                                    ->orderBy('id', 'desc')
        
                                    ->paginate(15);


        return view('autor/menu', compact('posts'));
        }
    }
}
