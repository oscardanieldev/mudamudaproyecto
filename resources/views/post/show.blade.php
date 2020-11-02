@extends('layouts.plantilla')
@section('title', $post->titulo)
@section('navbar')
@endsection

@section('contenido')

@if($post->foto)
    <img src="/imagesposts/{{$post->foto ? $post->foto->ruta_foto : '-' }}" class="img-fluid " width = "100%"  alt="900x400" >
@endif
<div class="container">
        <div class="h2 text-center py-4">
            {{$post->titulo}}
        </div>
    @Auth
        @if($post->user_id == Auth::user()->id)

            <div class="row ">
                    <div class="d-flex col justify-content-center">
                    <a href="{{route('post.edit', $post->id)}}"><i style="font-size: 150%;" class="fas pt-1 c-naranja fa-edit"></i></a>
                    </div>
            </div>
        @endif
    @endAuth
    
    <div class="row  cont-reducido-post d-md-block d-none">
        <p class="col-12 text-justify">
            <span class="text-justify">{!! $post->contenido !!}</span>
        </p>
    </div>
    <div class="row container  d-md-none">
        <p class="col-12 text-justify   ">
            <span class="text-justify">{!! $post->contenido!!}</span>
        </p>
    </div>
    <div class="row cont-reducido-post d-md-block d-none">
        <div class="col-12 text-left  ">
            <strong>Autor: &nbsp</strong>
            <a href="{{route('perfil.show', $post->User ? $post->User->id : '-'   )}}"><span>{{$post->User ? $post->User->name : '-' }}</span></a>
        </div>
    </div>
    <div class="row   d-md-none">
        <div class="col-12 text-left  ">
            <strong>Autor: &nbsp</strong>
            <a href="{{route('perfil.show', $post->User ? $post->User->id : '-'   )}}"><span>{{$post->User ? $post->User->name : '-' }}</span></a>
        </div>
    </div>
    <div class="row cont-reducido-post d-md-block d-none">
        <div class="col-12 text-left  ">
            <strong>Fecha de publicación: &nbsp</strong>
            <span>{{$fecha}}</span>
        </div>
    </div>
    <div class="row   d-md-none">
        <div class="col-12 text-left  ">
            <strong>Fecha de publicación: &nbsp</strong>
            <span>{{$fecha}}</span>
        </div>
    </div>
    
   

</div>










@endsection