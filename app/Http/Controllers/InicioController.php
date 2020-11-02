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

class InicioController extends Controller
{
    
    public function index(Request $request){

       // $news = Tipo::find(1)->posts->where('tipo_id', '1')
      
       $buscandos = $request->get('buscando');
          
      
      
            if($buscandos){
                $news = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                            ->where('tipo_id', '1')
                                            ->orderBy('id', 'desc')
                                            ->get();

                $reviews = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                            ->where('tipo_id', '2')
                                            ->orderBy('id', 'desc')
                                            ->get();

                $posts = DB::table('posts')->where('titulo', 'LIKE', "%$buscandos%")
                                            ->orderBy('id', 'desc')
                                            ->paginate(15);
            }


            
            else{

            $news = DB::table('posts')->where('tipo_id', '1')
                                        ->orderBy('id', 'desc')
                                        ->get();

            $reviews =  DB::table('posts')->where('tipo_id', '2')
                                        ->orderBy('id', 'desc')
                                        ->get();

            $posts = DB::table('posts')->orderBy('id', 'desc')
                                       ->paginate(15);
            }
            



        return view('inicio', compact('news','reviews', 'posts'));


        //$comments = DB::table('posts')->get();
       // return view('inicio', compact('comments'));
    }


}
