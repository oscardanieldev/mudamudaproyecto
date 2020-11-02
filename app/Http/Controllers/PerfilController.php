<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Foto;
use App\Post;
use App\Categoria;
use App\Subcategoria;
use App\Tipo;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->only('edit');
        $this->middleware('verified')->only('edit');

    }
    public function index()
    {
        //
        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
       
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
                                        ->get();

                                        return view('inicio', compact('news','reviews', 'posts'));
        }
        else{

        $user=User::findOrFail($id);
        return view('autor.perfil.show', compact('user') );
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
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
                                        ->get();

                                        return view('inicio', compact('news','reviews', 'posts'));
        }

        
        else{
        $user=User::findOrFail($id);
        return view('autor.perfil.edit', compact('user'));
        }   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user=User::findOrFail($id);
        $entrada=$request->all();
        
        if($archivo=$request->file('foto_id')){
            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images', $nombre);

            $foto=Foto::create(['ruta_foto'=>$nombre]);

            $entrada['foto_id']=$foto->id;
            
    }
    
    
    $user->update($entrada);
        


    return view('autor.perfil.show', compact('user') );
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
