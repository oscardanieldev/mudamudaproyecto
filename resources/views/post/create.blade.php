@extends('layouts.plantilla')
@section('title', 'Post')
@section('navbar')
@endsection

@section('contenido')

<!--------------------Definiendo Macro ------------------->

        {{ Form::macro('Titulo', function()
        {
            return '<input name="titulo" type="text" size="50" required>';
        }) }}

<!------------------Fin de Macro------------------------>

<div class="container">
<!------------------  CATEGORIAS SECCIÓN DE ESCRITORIO------------------>

<section class="d-none d-lg-block">   
{!! Form::open(['method' => 'POST', 'action'=>'PostController@store', 'files'=>true]) !!}
    <div class="row">
        <div class="col-12 text-center  h2">Escribe tu artículo aquí</div>
    </div>
                 
                <div class="row py-3 border-bottom">
                    <div class="col-3 text-center">
                    <span>Autor: </span> {{Form::select('user_id', [Auth::user()->id => Auth::user()->name])}}
                    </div>
                    <div class="col-3 text-center">
                        <span>Categoría: </span>{!! Form::select('categoria_id',     ['1' => 'Gaming', '2' => 'Tecnología', '3' => 'Cultura', '4' => 'Anime']) !!}
                    </div>
                    <div class="col-3 text-center">
                            <span>Subcategoría: </span>{!!  Form::select('subcategoria_id',[
                        '   Gaming' =>     [null=>'-'],
                            'Tecnología' => [null=>'-'],
                            'Cultura' =>    ['1' => 'Cine', '2' => 'Museos', '3' => 'Música', '4' => 'Conciertos', '5'  =>       'Ensayos', '6' => 'Tv & Series'],
                            'Anime' =>      ['7' => 'Anime', '8' => 'Manga'],
                            ])
                        !!}
                    </div>
                    <div class="col-3 text-center">

                        <span>Tipo de artículo: </span>{!! Form::select('tipo_id',          ['1' => 'News', '2' => 'Reviews']) !!}
                    </div>
                </div>

                                <div class="row py-3">
                        <div class="col-12 text-center">       
                                {!!Form::label('titulo:')!!}
                                {!!Form::Titulo()!!}
                        </div>
                    </div>
                    <div class="row py-3 ">
                        <div class="col-12 text-center">  
                                {!! Form::textarea('descripcion', null, [
                                                'class'      => 'form-control',
                                                'rows'       => 3,
                                                'placeholder' => 'Breve descripción...',
                                                'required',
                                                
                                            
                                ]) !!}
                        </div>
                    </div>
                    <div class="row py-3 ">
                        <div class="col-12 text-center">  
                                {!! Form::textarea('contenido', null, [
                                                'class'      => 'form-control',
                                                'rows'       => 20,
                                                'placeholder' => 'Escribe tu artículo aquí...',
                                                'required',
                                                'id' =>'summary-ckeditor'
                                            
                                ]) !!}
                        </div>
                    </div>
                    <div  class="row  pt-5  border-top">
                                <div class="col">
                                    {!! Form::label('imagen1', 'Foto: ') !!}
                                    {!! Form::file('imagen1') !!}
                                </div>
                            <section class="d-none d-lg-block">
                                <div class="col d-flex justify-content-center ">
                                    {!!Form::submit('Publicar')!!}
                                </div>
                            </section>
                            <section class="d-lg-none py-3">
                                <div class="col d-flex justify-content-start">
                                    {!!Form::submit('Publicar')!!}
                                </div>
                            </section>
                                
                    </div>
                            

                
                {!! Form::close() !!}
                        

        </section>



        <section class="d-lg-none ">       
        {!! Form::open(['method' => 'POST', 'action'=>'PostController@store', 'files'=>true]) !!}
            <div class="row">
                <div class="col-12 text-center  h2">Escribe tu artículo aquí</div>
            </div>

                <div class="row py-3 ">
                    <div class="col-12 ">
                        <div class="row">
                            <span class="col-6 text-center">Autor: </span>
                            <span class="col-6 text-center"> {{Form::select('user_id', [Auth::user()->id => Auth::user()->name])}}</span>
                        </div>
                        <div class="row">
                            <span class="col-6 text-center">Categoría: </span>
                            <span class="col-6 text-center"> {!! Form::select('categoria_id',     ['1' => 'Gaming', '2' => 'Tecnología', '3' => 'Cultura', '4' => 'Anime']) !!}</span>
                        </div>
                        <div class="row">
                            <span class="col-6 text-center">Subcategoría: </span>
                            <span class="col-6 text-center">{!!  Form::select('subcategoria_id',[
                        '   Gaming' =>     [null=>'-'],
                            'Tecnología' => [null=>'-'],
                            'Cultura' =>    ['1' => 'Cine', '2' => 'Museos', '3' => 'Música', '4' => 'Conciertos', '5'  =>       'Ensayos', '6' => 'Tv & Series'],
                            'Anime' =>      ['7' => 'Anime', '8' => 'Manga'],
                            ])
                        !!}</span>
                        </div>
                        <div class="row">
                            <span class="col-6 text-center">Tipo de artículo: </span>
                            <span class="col-6 text-center"> {!! Form::select('tipo_id',          ['1' => 'News', '2' => 'Reviews']) !!}</span>
                        </div>
                



        
<!------------------  CATEGORIAS SECCIÓN ------------------>


    <div class="row py-3">
         <div class="col-12 text-center">       
                {!!Form::label('titulo:')!!}
                {!!Form::Titulo()!!}
        </div>
    </div>
    <div class="row py-3 ">
        <div class="col-12  text-center">  
                {!! Form::textarea('descripcion', null, [
                                'class'      => 'form-control',
                                'rows'       => 3,
                                'placeholder' => 'Breve descripción...',
                                'required',
                                
                            
                ]) !!}
        </div>
    </div>
    <div class="row py-3 ">
        <div class="col-12 text-center">  
                {!! Form::textarea('contenido', null, [
                                'class'      => 'form-control',
                                'rows'       => 20,
                                'placeholder' => 'Escribe tu artículo aquí...',
                                'required',
                                'id' =>'summary-ckeditor2'
                            
                ]) !!}
        </div>
    </div>
    <div  class="row  pt-5  border-top">
                <div class="col">
                    {!! Form::label('imagen1', 'Foto: ') !!}
                    {!! Form::file('imagen1') !!}
                </div>
            <section class="d-none d-lg-block">
                <div class="col d-flex justify-content-center ">
                    {!!Form::submit('Publicar')!!}
                </div>
            </section>
            <section class="d-lg-none py-3">
                <div class="col d-flex justify-content-start">
                    {!!Form::submit('Publicar')!!}
                </div>
            </section>
                
    </div>
               
    </div>
 
  {!! Form::close() !!}
  </section>
        
</div> 
     






@endsection