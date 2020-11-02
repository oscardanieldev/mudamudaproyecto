@extends('layouts.plantilla')
@section('title', 'Administrador')

@section('contenido')
<div class="container">
    <h1 class="text-center pb-3">Página para agregar usuario</h1>

    <div class="d-flex justify-content-center">
    {!! Form::open(['method' => 'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
    
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
            {!! Form::label('password', 'Contraseña: ') !!}
            </div>
            <div class="col">
            {!! Form::password('password') !!}
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
            {!! Form::label('email', 'Verificar E-mail:') !!}
            </div>
            <div class="col">
            {!! Form::text('email_verified_at') !!}
            </div>
        </div>    
        <div class="row pt-3">
            <div class="col">
           {!! Form::label('role', 'Role: ') !!}
           </div>
           <div class="col">
                <div class="row">
                    <div class="col-10 text-center">    
                        {!! Form::label('role', 'Administrador ') !!}
                    </div>
                    <div class="col-2 text-center">
                        {!! Form::radio('role_id', '1') !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 text-center">
                        {!! Form::label('role', 'Autor ') !!}
                    </div>
                    <div class="col-2 text-center">
                        {!! Form::radio('role_id', '2') !!}
                    </div>
                </div>
           </div>
        </div>
        <div class="row py-3">
            <div class="col">
           {!! Form::label('foto_id', 'Foto: ') !!}
           </div>
           <div class="col">
           {!! Form::file('foto_id') !!}
           </div>
        </div>
        <div class="row">
             <div class="col">
            {!! Form::submit('Crear usuario') !!}
            </div>
            <div class="col">
            {!! Form::reset('Limpiar') !!}
            </div>
        </div>
    {!! Form::close() !!}
    </div>

</div>
@endsection