@extends('layouts.plantilla')
@section('title', 'Administrador')

@section('contenido')
<div class="container">
@if(Session::has('usuario_borrado'))

        <div class="alert alert-success text-center" role="alert">
            {{session('usuario_borrado')}}
        </div>
@endif
    <h1 class="text-center pb-3"> <span class="border-bottom px-3"> Página principal del administrador</span></h1>
        <div class="row d-flex   justify-content-center pb-2">
            <a href="{{route('users.create')}}"><i style="font-size: 35px;"  class="fas c-naranja  fa-user-plus"></i></a>
        </div>

            <section class="d-none d-lg-block">    
                <div class="row text-center bg-admin border-admin p-2">
                    <div class="col-1 ">Id</div>
                    <div class="col-2 ">Foto</div>
                    <div class="col-1 ">Role</div>
                    <div class="col-2 ">Nombre</div>
                    <div class="col-2 ">Email</div>
                    <div class="col-2 ">Creado</div>
                    <div class="col-2 ">Actualizado</div>
                </div>

                @if($users)
                    @foreach($users as $user)

                <div class="row border-bottom text-center">
                    <div class="col-1 d-flex align-items-center justify-content-center">{{ $user->id}}</div>
                    @if($user->foto)
                    <div class="col-2 py-2"><img src="/images/{{$user->foto ? $user->foto->ruta_foto : '-' }}" width="100px;"  alt="Foto de perfil"></div>
                    @else
                    <div class="col-2 py-2 d-flex align-items-center justify-content-center"><img src="/images/defecto.jpg" alt="" width="100px;"></div>
                    @endif
                    <div class="col-1 d-flex align-items-center justify-content-center">{{$user->role ? $user->role->nombre : '-' }}</div>
                    <div class="col-2 d-flex align-items-center justify-content-center"> <a href="{{ route('users.edit', $user->id) }}">{{ $user->name}} </a></div>
                    <div class="col-2 d-flex align-items-center justify-content-center">{{ $user->email}}</div>
                    <div class="col-2 d-flex align-items-center justify-content-center">{{ $user->created_at}}</div>
                    <div class="col-2 d-flex align-items-center justify-content-center">{{ $user->updated_at}}</div>
                </div>

                    @endforeach
                @endif
            </section>

        <div class="container">
        @foreach($users as $user)
            <section class="d-lg-none pt-3">
                        
                <div class="row   pt-3 ">
                    
                    <div class="col-12  " >
                        <div class="row border border-bottom-0 ">
                           <div class="col-12 text-center">
                                Foto
                           </div>
                        </div>
                        <div class="row  ">
                             @if($user->foto)
                                <img class="rounded-circle cont-reducido-i col-12 pt-2" src="/images/{{$user->foto ? $user->foto->ruta_foto : '-' }}" width="169px;" height="160px;"alt="foto de perfil">
                            @else
                                <img class="rounded-circle cont-reducido-i col-12 pt-2" src="/images/defecto.jpg" width="90%;" height="160px;"alt="foto de perfil">
                            @endif
                        </div>
                        <div class="row ">
                           <div class="col-12 text-center">
                                <a href="{{ route('users.edit', $user->id) }}"><i style="font-size: 130%;" class="fas pt-1 c-naranja fa-edit"></i></a>                                
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-6  text-center pt-2">
                                    Id:
                            </div>
                            <div class="col-6 text-center pt-2">
                                {{$user->id}}
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-6  text-center pt-2">
                                Role:
                            </div>
                            <div class="col-6 text-center pt-2">
                                {{$user->role ? $user->role->nombre : '-' }}
                            </div>
                        </div> 
                        <div class="row  ">
                            <div class="col-6  text-center pt-2">
                                Nombre:
                            </div>
                            <div class="col-6 text-center pt-2">
                                {{$user->name}}
                            </div>
                        </div>                         
                        <div class="row  ">
                            <div class="col-6  text-center pt-2">
                                Email:
                            </div>
                            <div class="col-6 text-center pt-2">
                                {{$user->email}}
                            </div>
                        </div>                         
                        <div class="row  ">
                            <div class="col-6  text-center pt-2">
                                Creado:
                            </div>
                            <div class="col-6 text-center pt-2">
                                {{ $user->created_at}}
                            </div>
                        </div>                        
                         <div class="row border border-top-0 ">
                            <div class="col-6  text-center pt-2">
                                Actualizado:
                            </div>
                            <div class="col-6 text-center pt-2">
                                {{ $user->updated_at}}
                            </div>
                        </div> 
                    </div>
                </div>
            
            </section>
        @endforeach
        </div>

</div>
@endsection