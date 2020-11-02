@extends('layouts.plantilla')
@section('title', 'Inicio')
@section('navbar')
@endsection

@section('contenido')

<div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" role="listbox" >
       <div class="carousel-item active">
            <a href="http://mudaproyecto.test/post/69"> <img class="d-block  w-100 img-fluid-c " src="{{ asset('carrusel/razi.jpg') }}" data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true" >
            </a>
            
        </div>
        <div class="carousel-item">
            <a href="#"><img class="d-block w-100 img-fluid-c" src="{{ asset('carrusel/imagen2.jpg') }}" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" >
            </a>
        </div>
        <div class="carousel-item ">
            <a href="#"> <img class="d-block  w-100 img-fluid-c " src="{{ asset('carrusel/paisaje1.jpg') }}" data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true" >
            </a>
        </div>
        <div class="carousel-item">
            <a href="#"><img class="d-block w-100 img-fluid-c" src="{{ asset('carrusel/paisaje2.jpg') }}" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" >
            </a>
        </div>
        <div class="carousel-item">
            <a href="#"> <img class="d-block  w-100 img-fluid-c " src="{{ asset('carrusel/imagen3.jpg') }}" data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true" >
            </a>
        </div>
        <div class="carousel-item">
            <a href="#"><img class="d-block w-100 img-fluid-c" src="{{ asset('carrusel/imagen4.jpg') }}" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" >
            </a>
        </div>
        
  </div>
  <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>



<div class="container pt-3 c-blanco">
  <div class="row pt-5 text-center d-flex justify-content-center">

  <div class="col-8 d-none d-lg-block">
          @foreach($posts as $post)

          <a href="{{route('post.show', $post->id)}}"  >
                <div class="row  border m-4 bg-barra zoom py-2">
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
            <div class="row d-flex justify-content-center">
              <div class="col-12 d-flex justify-content-center">
                {{$posts->links() }}
              </div>
            </div>

        </div>
  <!--     <div class="col-6  rounded border-right d-none d-lg-block">
        <div class="row py-3 text-center">
         
          <div class="col">
            <span class="h1 c-naranja-sh">News</span>
          </div>
        </div>
        
     @foreach ($news as $new)
        <a href="{{route('post.show', $new->id)}}">
          <div class="row bg-barra rounded-pill  m-2 border zoom py-2">
            @if($new->imagen1)
              <div class="col-4">
              <img class="rounded-pill" src="/imagesposts/{{App\Post::find($new->id)->foto->ruta_foto}}" width="170px;"  alt="imagen   news">
              </div>
            @endif
            <div class="col-8">
          
            
                <div class="h3 col-12 c-blanco">
                {{$new->titulo}}
                </div>
                <div class="col-12 c-blanco">

                {{$new->descripcion}}
                </div>
                
           
            </div>
          </div>
         </a>
         @endforeach
        </div>
       <div class="col-6  d-none d-lg-block rounded border-left">
          <div class="row py-3 text-center">
              <div class="col">
                <span class="h1 c-naranja-sh ">Reviews</span>
              </div>
            </div>
          @foreach ($reviews as $review) 
          <a href="{{route('post.show', $review->id)}}"> 
            <div class="row bg-barra rounded-pill  m-2 border zoom py-2">
              @if($review->imagen1)
                <div class="col-4">
                <img class="rounded-pill" src="/imagesposts/{{App\Post::find($review->id)->foto->ruta_foto}}"  width="169px;" alt="reviews">
              </div>
              @endif
                <div class="col-8">
                    <div class="h3 col-12 c-blanco">
                    {{$review->titulo}}
                    </div>
                    <div class="col-12 c-blanco">

                      {{$review->descripcion}}
                  </div>
                </div>
              </div>
            </a>
            @endforeach -->
        </div>


        <div class="col-12 d-lg-none">
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
          <div class="row d-flex justify-content-center">
              <div class="col-12 d-flex justify-content-center">
                {{$posts->links() }}
              </div>
            </div>
        </div>



  </div>








</div>






@endsection