@extends('layouts.plantilla')
@section('title', 'Perfil')
@section('navbar')
@endsection

@section('contenido')
    <div class="container ">
        <div class="row ">
                @if($user->foto)
                <img class="rounded-circle cont-reducido-i col-12 " src="/images/{{$user->foto ? $user->foto->ruta_foto : '-' }}" width="169px;" height="160px;"alt="foto de perfil">
                @else
                <img class="rounded-circle cont-reducido-i col-12 " src="/images/defecto.jpg" width="90%;" height="160px;"alt="foto de perfil">
                @endif
                
        </div>
       
        <div class="row h2">
                <div class="d-flex col justify-content-center">
                <span>{{$user->name}}</span>
                </div>
        </div>
        
        <div class="row ">
                <div class="d-flex col justify-content-center">
                <span>{{$user->email}}</span>
                </div>
        </div>
        @Auth
        @if($user->email == Auth::user()->email)
        <div class="row ">
                <div class="d-flex col justify-content-center">
                    <a href="{{route('perfil.edit', Auth::user()->id)}}"><i style="font-size: 150%;" class="fas pt-1 c-naranja fa-edit"></i></a>
                </div>
        </div>
        @endif
        @endAuth
        

        <div class="container border-top my-5">
            <div class="row pt-3">
                <div class="col-12  cont-reducido-p">
                    <p style="font-size: 1.1rem;" class="text-justify font-body">{!! nl2br(e($user->info)) !!}</p>
                </div>
            </div>        
        </div>




    </div>

@endsection