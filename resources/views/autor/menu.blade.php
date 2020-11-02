@extends('layouts.plantilla')
@section('title', 'Menú de autor')
@section('navbar')
@endsection

@section('contenido')
<div class="container">
    <div class="container d-none d-lg-block">
        <div class="row">
            <div class="col">
                <h1 class="text-center   my-3"> <span class="border-bottom px-5"> Menú del autor </span></h1>
            </div>

        <div class="row">
            <div class="col-2 border-right-a justify-content-center">
                <div class="row d-flex ">
                    @if(Auth::user()->foto)
                    <img class="rounded-circle col-12 " src="/images/{{Auth::user()->foto ? Auth::user()->foto->ruta_foto : '-' }}" width="90%;" height="160px;"alt="foto de perfil">
                    @else
                    <img class="rounded-circle col-12 " src="/images/icono.png" width="90%;" height="160px;"alt="foto de perfil">
                    @endif
                </div>
                <div class="row text-center">
                    <div class="col-12 pt-4">
                            <a href="{{route('perfil.show', Auth::user()->id)}}">Ver perfil</a>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12 ">
                            {{Auth::user()->name}}
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12 ">
                            {{Auth::user()->role ? Auth::user()->role->nombre : '-' }}
                    </div>                      
                </div>                      
                            @if(Auth::user()->role_id == 1)
                <div class="row text-center">
                    <div class="col-12">
                            <a href="{{route('users.index')}}"><span> Menú admin </span></a>
                    </div>
                </div>
                            @endif
                        
                <div class="row text-center pt-3">
                    <div class="col-12 ">
                        <a  class="border-top-salir d-inline-block mt-2 " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            
            
            
            </div>
            <div class="col-8 border-right-a ">

                <div class="text-center h1 pt-5"><div class="row">
                        <div class="col-12">
                            <span>Tus Publicaciones</span>
                        </div>
                    </div>

                    <div class="row  c-naranja-sh pb-2">
                        <i class="far fa-arrow-alt-circle-down col-12"></i>
                    </div>
                    

                </div>

                    @foreach ($posts as $post)
                    <a href="{{route('post.show', $post->id)}}">
                    <div class="row rounded-pill border m-2 bg-barra zoom py-2">
                        @if($post->imagen1)
                        <div class="col-4">
                        <img src="/imagesposts/{{App\Post::find($post->id)->foto->ruta_foto}}" class="rounded-pill" width="170px;"  alt="imagen   posts">
                        </div>
                        <div class="col-8">
                    
                        
                            <div class="h3 col-12 c-blanco">
                            {{$post->titulo}}
                            </div>
                            <div class="col-12 c-blanco">

                            {{$post->descripcion}}
                            </div>
                            
                    
                        </div>
                        @else
                            <div class="col-12 text-center">
                        
                                    
                                <div class="h3 col-12 c-blanco">
                                {{$post->titulo}}
                                </div>
                                <div class="col-12 c-blanco">

                                {{$post->descripcion}}
                                </div>
                                
                        
                            </div>
                        @endif
                        
                    </div>
                    </a>
                    @endforeach
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-12 text-center">
                        ¿Vas a escribir hoy?
                    </div>
                </div>
                <div style=" padding-right: 12%; padding-left: 12%;" class="row">
                    <a class="btn btn-primary  col text-center my-3" href="{{route('post.create')}}">Publicar</a>
                </div>

                <form  class=" row d-flex  justify-content-center">
                                        <input  class="form-control mt-3 mx-2 col-10" type="search" name="buscandopost"placeholder="Buscar">

                                        <button  class="btn-buscador my-2 col-4 offset mt-1 py-1 " type="submit"><i class="fas fa-search"></i></button>
                </form>



            </div>
        </div>

        </div>
    </div>

    <div class="container d-lg-none">
            <div class="row">
                    <div class="col">
                        <h1 class="text-center   "> <span class="border-bottom px-5"> Menú del autor </span></h1>
                    </div>
            </div>
            <div class="row pt-3">
                <div class="col-12 ">
                    <div class="row ">
                        @if(Auth::user()->foto)
                        <img class="rounded-circle cont-reducido-i img-fluid col-12 " src="/images/{{Auth::user()->foto ? Auth::user()->foto->ruta_foto : '-' }}"  height="160px;"alt="foto de perfil">
                        @else
                        <img class="rounded-circle col-12 img-fluid col-12" src="/images/defecto.jpg" width="90%;" height="160px;"alt="foto de perfil">
                        @endif
                    </div>
                    <div class="row text-center">
                        <div class="col-12 pt-4">
                                <a href="{{route('perfil.show', Auth::user()->id)}}">Ver perfil</a>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-12 ">
                                {{Auth::user()->name}}
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12 ">
                                {{Auth::user()->role ? Auth::user()->role->nombre : '-' }}
                        </div>                      
                    </div>                      
                                @if(Auth::user()->role_id == 1)
                    <div class="row text-center">
                        <div class="col-12">
                                <a href="{{route('users.index')}}"><span> Menú admin </span></a>
                        </div>
                    </div>
                                @endif
                            
                    <div class="row text-center pt-3">
                        <div class="col-12 ">
                            <a  class="border-top-salir d-inline-block mt-2 " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                
                
                
                </div>
            </div>
            <div class="row pt-3">
            
                    <div class="col-12 text-center">
                        ¿Vas a escribir hoy?
                    </div>
                </div>
                <div style=" padding-right: 12%; padding-left: 12%;" class="row">
                    <a class="btn btn-primary  col text-center my-3" href="{{route('post.create')}}">Publicar</a>
                </div>

                <form  class=" row d-flex  justify-content-center">
                                        <input  class="form-control mt-3 mx-2 col-10" type="search" name="buscandopost"placeholder="Buscar">

                                        <button  class="btn-buscador my-2 col-4 offset mt-1 py-1 " type="submit"><i class="fas fa-search"></i></button>
                </form>

            </div>
            <div class="row ">
                <div class="text-center h1 col-12 pt-5">
                
                    
                            <span class="d-lg-none">Tus Publicaciones</span>
                        
                    

                    <div class="row d-lg-none c-naranja-sh pb-2">
                        <i class="far fa-arrow-alt-circle-down col-12"></i>
                    </div>
                    

                </div>

            <div class="col-12 ">
            @foreach($posts as $post)

            <a href="{{route('post.show', $post->id)}}"  class="d-lg-none">
                    <div class="row  border m-2 bg-barra zoom py-2">
                        @if($post->imagen1)
                        <div class="col-5 text-center d-flex align-items-center">
                        <img src="/imagesposts/{{App\Post::find($post->id)->foto->ruta_foto}}" class="rounded-pill img-fluid" width="150px;"  alt="imagen   posts">
                        </div>
                        <div class="col-7">
                    
                        
                            <div class="h5 col-12 c-blanco">
                            {{$post->titulo}}
                            </div>
                            <div class="col-12 c-blanco">

                            {{$post->descripcion}}
                            </div>
                        
                            
                    
                        </div>
                        <div class=" px-3 c-blanco bg-primary">
                            {{App\Post::find($post->id)->tipo->tipo}}
                        </div>
                        @else
                            <div class="col-12 text-center">
                        
                                    
                                <div class="h5 col-12 c-blanco">
                                {{$post->titulo}}
                                </div>
                                <div class="col-12 c-blanco">

                                {{$post->descripcion}}
                                </div>
                                
                        
                            </div>
                            <div class=" px-3 c-blanco bg-primary">
                                {{App\Post::find($post->id)->tipo->tipo}}
                        </div>
                        @endif
                        
                    </div>
                    </a>

                
            @endforeach
            </div>


                        
            </div>
        
    </div>
    <div class="row d-flex justify-content-center">
              <div class="col-12 d-flex justify-content-center">
                {{$posts->links() }}
              </div>
            </div>

</div>

@endsection