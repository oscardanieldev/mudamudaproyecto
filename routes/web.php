<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//-----------------------RUTAS DE AUTENTICACIÓN----------------
Auth::routes(['verify' => true]);
//-----------------------LARAVEL--------------------------------
Route::get('/home', 'HomeController@index')->name('home');

//-----------------------PÁGINA PRINCIPAL------------------------------
Route::get('/', 'InicioController@index');


//-----------------------MENÚ DEL AUTOR------------------------------
Route::get('/autor/menu', 'AutorController@index')->middleware('auth', 'verified');


//----------------------GAMING---------------------------------------
Route::get('/gaming', 'GamingController@index');
Route::get('/gaming/news', 'GamingController@news');
Route::get('/gaming/reviews', 'GamingController@reviews');


//----------------------TECNOLOGÍA--------------------
Route::get('/tecnología', 'TecnologiaController@index');
Route::get('/tecnología/news', 'TecnologiaController@news');
Route::get('/tecnología/reviews', 'TecnologiaController@reviews');

//-----------------------CULTURA---------------------------
Route::get('/cultura', 'CulturaController@index');
Route::get('/cultura/cine', 'CulturaController@cine');
Route::get('/cultura/museos', 'CulturaController@museos');
Route::get('/cultura/música', 'CulturaController@musica');
Route::get('/cultura/conciertos', 'CulturaController@conciertos');
Route::get('/cultura/ensayos', 'CulturaController@ensayos');
Route::get('/cultura/tv&series', 'CulturaController@tvyseries');
Route::get('/cultura/tv&series', 'CulturaController@tvyseries');
Route::get('/cultura/news', 'CulturaController@news');
Route::get('/cultura/reviews', 'CulturaController@reviews');


//------------------------ANIME----------------------------
Route::get('/anime', 'AnimeController@index');
Route::get('/anime/anime', 'AnimeController@anime');
Route::get('/anime/manga', 'AnimeController@manga');
Route::get('/anime/news', 'AnimeController@news');
Route::get('/anime/reviews', 'AnimeController@reviews');




//------------------------ADMINISTRADOR---------------------------
Route::resource('/admin/users', 'AdminUsersController')->middleware('EsAdmin', 'verified');
//-------------------------PERFIL DE AUTOR----------------------------------
Route::resource('/autor/perfil', 'PerfilController');
//------------------------POST-----------------------------------
Route::resource('/post', 'PostController');


/*Route::get('/', function(){
  
    return view('inicio');
});*/