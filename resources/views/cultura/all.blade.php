@extends('layouts.plantilla')
@section('title', 'Tecnología')
@section('navbar')
@endsection

@section('contenido')
<div class="container">

            <div class="col-12">

            
                    <div class="text-center h1 "><div class="row">
                            <div class="col-12 display-4">
                                <span>Cultura</span>
                            </div>
                        </div>

                        <div class="row  c-naranja-sh pb-2">
                            <i class="far fa-arrow-alt-circle-down col-12"></i>
                        </div>
                        

                    </div>

                @foreach ($posts as $post)
                <a href="{{route('post.show', $post->id)}}"  class="d-md-none">
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
                    @else
                        <div class="col-12 text-center">
                    
                                
                            <div class="h5 col-12 c-blanco">
                            {{$post->titulo}}
                            </div>
                            <div class="col-12 c-blanco">

                            {{$post->descripcion}}
                            </div>
                            
                    
                        </div>
                    @endif
                    
                </div>
                </a>

                <a href="{{route('post.show', $post->id)}}" class="d-none d-md-block">
                <div class="row rounded-pill border m-2 bg-barra zoom py-2">
                    @if($post->imagen1)
                    <div class="col-4 text-center">
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
            <div class="row d-flex justify-content-center">
              <div class="col-12 d-flex justify-content-center">
                {{$posts->links() }}
              </div>
            </div>
</div>



@endsection