<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Foto;
use App\Post;
use App\Categoria;
use App\Subcategoria;
use App\Tipo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->only('create', 'edit');
    }





    public function index()
    {
        //
      
        // $post=Post::find(21);




         //return $post->foto->ruta_foto;

         $comments = Categoria::find(1)->posts;

 
         return view('post.index', compact('comments'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

        return view('post.create');
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
        
        $entrada=$request->all();
       

        if($archivo=$request->file('imagen1')){
                $nombre=$archivo->getClientOriginalName();

                $archivo->move('imagesposts', $nombre);

                $foto=Foto::create(['ruta_foto'=>$nombre]);

                $entrada['imagen1']=$foto->id;

            }
         /*   if($archivo=$request->file('imagen2')){
                $nombre=$archivo->getClientOriginalName();

                $archivo->move('imagesposts', $nombre);

                $foto=Segundasfoto::create(['ruta_foto'=>$nombre]);

                $entrada['imagen2']=$foto->id;

         */ 
        
        Post::create($entrada);
        return redirect('/autor/menu');

        

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
        $post=Post::findOrFail($id);
        $fecha=$post->created_at->format('d-m-Y');
        return view('post.show', compact('post','fecha') );
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
        $post=Post::findOrFail($id);
        return view('post.edit', compact('post'));
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
        $post=Post::findOrFail($id);

        $entrada=$request->all();
       

        if($archivo=$request->file('imagen1')){
                $nombre=$archivo->getClientOriginalName();

                $archivo->move('imagesposts', $nombre);

                $foto=Foto::create(['ruta_foto'=>$nombre]);

                $entrada['imagen1']=$foto->id;

            }
         /*   if($archivo=$request->file('imagen2')){
                $nombre=$archivo->getClientOriginalName();

                $archivo->move('imagesposts', $nombre);

                $foto=Segundasfoto::create(['ruta_foto'=>$nombre]);

                $entrada['imagen2']=$foto->id;

         */ 
        
        $post->update($entrada);
        return redirect('/autor/menu');

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
