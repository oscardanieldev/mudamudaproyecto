@extends('layouts.plantilla')
@section('title', 'Administrador')

@section('contenido')
<div class="container">
<h1 class="text-center pb-3">Página para editar usuario</h1>


        <div class="d-flex justify-content-center">
        {!! Form::model($user,['method' => 'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

            <div class="row pt-3">
                <div class="col">
                {!! Form::label('nombre', 'Nombre: ') !!}
                </div>
                <div class="col">
                {!! Form::text('name') !!}
                </div>
            </div>
            
            <div class="row pt-3">
                <div class="col">  
                {!! Form::label('email', 'E-Mail: ') !!}
                </div>
                <div class="col">
                {!! Form::text('email') !!}
                </div>
            </div>
               
            <div class="row pt-3">
                <div class="col">
                    <div class="row">
                        <div class="col-10 text-center">    
                        {!! Form::label('role', 'Administrador ') !!}
                        </div>
                        <div class="col-2 ">
                        {!! Form::radio('role_id', '1') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 text-center">
                            {!! Form::label('role', 'Autor ') !!}
                        </div>
                        <div class="col-2 ">
                             {!! Form::radio('role_id', '2') !!}
                        </div>
                    </div>
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
            <div class="row">
                <div class="col">
                {!! Form::submit('Modificar usuario') !!}
                </div>
                <div class="col">
                {!! Form::reset('Limpiar') !!}
                </div>
            </div>

          
        {!! Form::close() !!}
        {!! Form::model($user,['method' => 'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
            <div class="row pt-3">
                <div class="col">
                    {!! Form::submit('Eliminar') !!}
                </div>
            </div>
        {!! Form::close() !!}
       


        </div>

</div>
@endsection