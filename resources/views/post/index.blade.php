@extends('layouts.plantilla')
@section('title', 'Post')
@section('navbar')
@endsection

@section('contenido')

<div class="container">

<img src="/imagesposts/download.jpg" alt="imagen">

         @foreach ($comments as $comment) 
                {{App\Post::find($comment->id)->foto->ruta_foto}}
                {{$comment->titulo}}
                <br>
              
                <br><br>
         @endforeach
  
</div>
@endsection