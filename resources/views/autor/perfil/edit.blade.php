@extends('layouts.plantilla')
@section('title', 'Administrador')

@section('contenido')
<div class="container">
<h1 class="text-center pb-3">Página para editar perfil</h1>


        <div class="d-flex justify-content-center">
        {!! Form::model($user,['method' => 'PATCH', 'action'=>['PerfilController@update', $user->id], 'files'=>true]) !!}

            <div class="row pt-3">
                <div class="col-6">
                {!! Form::label('nombre', 'Nombre: ') !!}
                </div>
                <div class="col-6">
                {!! Form::text('name') !!}
                </div>
            </div>    
            <div class="row">
                <div class="col-6">  
                {!! Form::label('email', 'E-Mail: ') !!}
                </div>
                <div class="col-6">
                {!! Form::text('email') !!}
                </div>
                
            </div>
               
           
            <div class="row py-3">
                <div class="col">
                @if($user->foto)
                <img src="/images/{{$user->foto ? $user->foto->ruta_foto : '-' }}" class="pb-2" width="100px;"  alt="Foto de perfil">           
                @else
                <img src="/images/defecto.jpg" alt="Imagen por defecto"  class="pb-2" width="100px;">
                @endif


                {!! Form::file('foto_id') !!}
                 </div>
            
            </div>
           
            <div class="row pt-3">
                <div class="col">
                {!! Form::label('descripcion', 'Descripción: ') !!}
                </div>
               
            </div>
            <div class="row pt-3">
                <div class="col">
                {!! Form::textarea('info', null, [
                    'class'      => 'form-control',
                    'rows'       => 20
                   
                ]) !!}
                </div>
               
            </div>
            <div class="row  pt-3">
                <div class="col">
                {!! Form::submit('Modificar perfil') !!}
                </div>
                <div class="col">
                {!! Form::reset('Limpiar') !!}
                </div>
            </div>
          
        {!! Form::close() !!}
       


        </div>

</div>
@endsection