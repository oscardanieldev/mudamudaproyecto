<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ asset('images/icono.png') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    </head>
    <body>
        <div class="barra-de-navegacion ">
        @yield('navbar')
            <div class="navbar fixed-top  navbar-dark bg-barra d-lg-none"> 
                <div class="container-fluid">
                   
                        <div class=" navbar-brand"> <a class="navbar-brand" href="/"> <span class="fuente-titulo h5 "> MUDA MUDA SHOW </span></a></div>  
                        
                        <button type="button" class="navbar-toggler s-focus" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menú de navegacion">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        
                            <div class="collapse navbar-collapse" id="menu-principal">
                                    @auth
                                        <div class="row ">
                                        <div class="col-12 text-center text-capitalize c-blanco ">
                                            Hola,&nbsp <span><a href="/autor/menu"><span  class="text-center  info">{{Auth::user()->name}}</span></span></a>
                                        </div>  
                                        </div>
                                        @endauth
                                <button class="navbar-toggler pestana border-0 d-block" data-target="#gaming" data-toggle="collapse" aria-expanded="false" aria-controls="gaming">
                                <span class="text-uppercase">Gaming <i class="fas  fa-caret-down"></i></span>
                                </button>
                                <div id="gaming" class="collapse navbar-collapse">
                                <ul class="sin-viñetas pt-2">  
                                    <li><a href="/gaming/news" class="navbar-toggler border-0"> <span class="text-uppercase">news</span> </a></li>
                                    <li><a href="/gaming/reviews" class="navbar-toggler border-0"> <span class="text-uppercase">review</span> </a></li>
                                    <li><a href="/gaming" class="navbar-toggler border-0"> <span class="text-uppercase">all</span> </a></li>
                                </ul>  
                                </div>

                                <button class="navbar-toggler pestana border-0 d-block" data-target="#tecnologia" data-toggle="collapse" aria-expanded="false" aria-controls="tecnologia"><span class="text-uppercase">Tecnología <i class="fas  fa-caret-down"></i></span>
                                </button>
                                <div id="tecnologia" class="collapse navbar-collapse">
                                <ul class="sin-viñetas pt-2">  
                                    <li><a href="/tecnología/news" class="navbar-toggler border-0"> <span class="text-uppercase">news</span> </a></li>
                                    <li><a href="/tecnología/reviews" class="navbar-toggler border-0"> <span class="text-uppercase">reviews</span> </a></li>
                                    <li><a href="/tecnología" class="navbar-toggler border-0"> <span class="text-uppercase">all</span> </a></li>
                                </ul>  
                                </div>
                                
                                <button class="navbar-toggler pestana border-0 d-block" data-target="#cultura" data-toggle="collapse" aria-expanded="false" aria-controls="cultura"><span class="text-uppercase">Cultura <i class="fas  fa-caret-down"></i></span>
                                </button>
                                <div id="cultura" class="collapse navbar-collapse">
                                <ul class="sin-viñetas pt-2">  
                                    <li><a href="/cultura/cine" class="navbar-toggler border-0"> <span class="text-uppercase">cine</span> </a></li>
                                    <li><a href="/cultura/museos" class="navbar-toggler border-0"> <span class="text-uppercase">museos</span> </a></li>
                                    <li><a href="/cultura/música" class="navbar-toggler border-0"> <span class="text-uppercase">música</span> </a></li>
                                    <li><a href="/cultura/conciertos" class="navbar-toggler border-0"> <span class="text-uppercase">conciertos</span> </a></li>
                                    <li><a href="/cultura/ensayos" class="navbar-toggler border-0"> <span class="text-uppercase">ensayos</span> </a></li>
                                    <li><a href="/cultura/tv&series" class="navbar-toggler border-0"> <span class="text-uppercase">tv & series</span> </a></li>
                                    <li><a href="/cultura/news" class="navbar-toggler border-0"> <span class="text-uppercase">news</span> </a></li>
                                    <li><a href="/cultura/reviews" class="navbar-toggler border-0"> <span class="text-uppercase">reviews</span> </a></li>
                                    <li><a href="/cultura" class="navbar-toggler border-0"> <span class="text-uppercase">All</span> </a></li>
                                </ul>  
                                </div>
                                <button class="navbar-toggler pestana border-0 d-block" data-target="#anime" data-toggle="collapse" aria-expanded="false" aria-controls="anime"><span class="text-uppercase">anime <i class="fas  fa-caret-down"></i></span>
                                </button>
                                <div id="anime" class="collapse navbar-collapse">
                                <ul class="sin-viñetas pt-2">  
                                    
                                    <li><a href="/anime/anime" class="navbar-toggler border-0"> <span class="text-uppercase">anime</span> </a></>
                                    <li><a href="/anime/manga" class="navbar-toggler border-0"> <span class="text-uppercase">manga</span> </a></li>
                                    <li><a href="/anime/news" class="navbar-toggler border-0"> <span class="text-uppercase">news</span> </a></li>
                                    <li><a href="/anime/reviews" class="navbar-toggler border-0"> <span class="text-uppercase">reviews</span> </a></li>
                                    <li><a href="/anime" class="navbar-toggler border-0"> <span class="text-uppercase">All</span> </a></li>
                                   
                                </ul>  
                                </div>
                                <button disabled class="navbar-toggler pestana border-0 d-block " data-target="#podcast" data-toggle="collapse" aria-expanded="false" aria-controls="podcast"><span class="text-uppercase">Podcast <i class="fas  fa-caret-down"></i></span>
                                </button>
                                <div id="podcast" class="collapse navbar-collapse">
                                <ul class="sin-viñetas pt-2">  
                                    <li><a href="#" class="navbar-toggler border-0"> <span class="text-uppercase">Muda muda show</span> </a></li>
                                    <li><a href="#" class="navbar-toggler border-0"> <span class="text-uppercase">""</span> </a></li>
                                    <li><a href="#" class="navbar-toggler border-0"> <span class="text-uppercase">""</span> </a></li>
                                    <li><a href="#" class="navbar-toggler border-0"> <span class="text-uppercase">""</span> </a></li>
                                    <li><a href="#" class="navbar-toggler border-0"> <span class="text-uppercase">""</span> </a></li>
                                    
                                </ul>  
                                </div>
                                <div class=" border row border-top-0 mt-4">
                                  <div class="col-12 cont-redes-m  d-flex justify-content-between ">  
                                    <a href="#" class="redes"><i class="fab fa-facebook iconos-m"></i></a>
                                    <a href="#" class="redes"><i class="fab fa-twitter-square iconos-m"></i></a>
                                    <a href="#" class="redes"><i class="fab fa-instagram iconos-m"></i></a>
                                    <a href="#" class="redes"><i class="fab fa-youtube iconos-m"></i></a>
                                  </div>
                                </div>
                                <div class="d-block  col-12 text-center pt-1">
                                    <a href="#" class="navbar-toggler border-0"> <span class="text-uppercase contacto-m ">¿quienes somos?</span> </a>
                                    <a href="#" class="navbar-toggler border-0"> <span class="text-uppercase contacto-m ">servicios</span> </a>
                                    <a href="#" class="navbar-toggler border-0"> <span class="text-uppercase contacto-m ">contacto</span> </a>
                                </div>
                                <form class=" row">
                                    <input class="form-control mt-3 mr-2 col-8" type="search" name="buscando"placeholder="Buscar">
                                    <button class="btn-buscador my-2 col-3 offset mt-3 py-1 " type="submit"><i class="fas fa-search"></i></button>
                                </form>
                               
                        </div>
                </div>
                
                        
                    
            </div>

<!---------------BARRA DE NAVEGACIÓN PARA VERSIÓN DE ESCRITORIO------------------------>
            <div class="bg-barra fixed-top navbar  navbar-dark text-uppercase row d-none d-lg-block ">
                <div class="col fuente-titulo h5 d-flex  justify-content-center">
                    <a href="/"  style="text-decoration: none;"><div class="c-blanco  pt-2">MUDA MUDA SHOW</div></a>
                </div>
                <div class="row container-fluid c-blanco ">
                    <div class="col-2 d-flex justify-content-between cont-redes  border-top border-bottom pt-2">
                        <a href="#" class="redes"><i class="fab fa-facebook iconos-e"></i></a>
                        <a href="#" class="redes"><i class="fab fa-twitter-square iconos-e"></i></a>
                        <a href="#" class="redes"><i class="fab fa-instagram iconos-e"></i></a>
                        <a href="#" class="redes"><i class="fab fa-youtube iconos-e"></i></a>
                    </div>
                    <div class="col-9 row">
                        <div class="col">
                                <button class="btn b-barra h-menu text-uppercase c-blanco" type="button" id="#gaming" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="h-menu  fz-menu sparkle u-hover--sparkle">gaming &nbsp<i class="fas fa-caret-down"></i></span>
                                </button>
                                <div class="dropdown-menu bg-dropdown" aria-labelledby="gaming">
                                    <a class="dropdown-item" href="/gaming/news"> <span class="c-blanco">news</span></a>
                                    <a class="dropdown-item" href="/gaming/reviews"><span class="c-blanco">reviews</span></a>
                                    <a class="dropdown-item" href="/gaming"><span class="c-blanco">all</span></a>
                                </div>

                        </div>
                        <div class="col">
                            
                                <button class="btn b-barra h-menu text-uppercase c-blanco" type="button" id="#tecnologia" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="h-menu  fz-menu sparkle u-hover--sparkle ">tecnología &nbsp<i class="fas fa-caret-down"></i></span>
                                </button>
                                <div class="dropdown-menu bg-dropdown" aria-labelledby="tecnologia">
                                    <a class="dropdown-item" href="/tecnología/news"><span class="c-blanco">news</span></a>
                                    <a class="dropdown-item" href="/tecnología/reviews"><span class="c-blanco">reviews</span></a>
                                    <a class="dropdown-item" href="/tecnología"><span class="c-blanco">all</span></a>
                                </div>
                            

                         </div>
                         <div class="col">
                            
                                <button class="btn b-barra h-menu text-uppercase c-blanco" type="button" id="#cultura" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="h-menu fz-menu sparkle u-hover--sparkle">cultura &nbsp<i class="fas fa-caret-down"></i></span>
                                </button>
                                <div class="dropdown-menu bg-dropdown" aria-labelledby="cultura">
                                    <a class="dropdown-item" href="/cultura/cine"><span class="c-blanco">cine</span></a>
                                    <a class="dropdown-item" href="/cultura/museos"><span class="c-blanco">museos</span></a>
                                    <a class="dropdown-item" href="/cultura/música"><span class="c-blanco">música</span></a>
                                    <a class="dropdown-item" href="/cultura/conciertos"><span class="c-blanco">conciertos</span></a>
                                    <a class="dropdown-item" href="/cultura/ensayos"><span class="c-blanco">ensayos</span></a>
                                    <a class="dropdown-item" href="/cultura/tv&series"><span class="c-blanco">TV & Series</span></a>

                                    <a class="dropdown-item" href="/cultura/news"><span class="c-blanco">news</span></a>
                                    <a class="dropdown-item" href="/cultura/reviews"><span class="c-blanco">reviews</span></a>
                                    <a class="dropdown-item" href="/cultura"><span class="c-blanco">all</span></a>

                                </div>
                            

                         </div>
                         <div class="col">
                            
                                <button class="btn b-barra h-menu text-uppercase c-blanco" type="button" id="#anime" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="h-menu fz-menu sparkle u-hover--sparkle">anime &nbsp<i class="fas fa-caret-down"></i></span>
                                </button>
                                <div class="dropdown-menu bg-dropdown c-blanco" aria-labelledby="anime">
                                    <a class="dropdown-item" href="/anime/anime"><span class="c-blanco">anime</span></a>
                                    <a class="dropdown-item" href="/anime/manga"><span class="c-blanco">manga</span></a>
                                    <a class="dropdown-item" href="/anime/news"><span class="c-blanco">news</span></a>
                                    <a class="dropdown-item" href="/anime/reviews"><span class="c-blanco">reviews</span></a>
                                    <a class="dropdown-item" href="/anime"><span class="c-blanco">all</span></a>


                                </div>
                           

                         </div>

                         <div class="col">
                            
                                <button disabled class="btn b-barra h-menu text-uppercase c-blanco" type="button" id="#podcast" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="h-menu fz-menu sparkle u-hover--sparkle ">podcast &nbsp<i class="fas fa-caret-down"></i></span>
                                </button>
                                <div class="dropdown-menu bg-dropdown" aria-labelledby="podcast">
                                    <a class="dropdown-item" href="#!"><span class="c-blanco">muda muda show</span></a>
                                    <a class="dropdown-item" href="#!"><span class="c-blanco">""</span></a>
                                    <a class="dropdown-item" href="#!"><span class="c-blanco">""</span></a>
                                    <a class="dropdown-item" href="#!"><span class="c-blanco">""</span></a>

                                </div>
                            

                         </div>
                    </div>
                    <div class="col-1">
                        <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#hamburguesa" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menú de navegacion">
                        <span class="navbar-toggler-icon "></span>
                        </button>
                    </div>
                    @auth
                    <div class="col d-flex text-capitalize justify-content-center">
                        Hola,&nbsp <span><a href="/autor/menu"><span  class="text-center  info">{{Auth::user()->name}}</span></span></a>
                    </div>  
                    @endauth
                </div>
                <div class="row text-uppercase c-blanco cont-reducido">
                    <div class="col-12 ">
                        <div id="hamburguesa"  class="collapse navbar-collapse navbar d-felx justify-content-center row">
                                <div class="d-block border border-top-0 col-12 text-center">
                                    <a href="#" class="navbar-toggler border-0"> <span class="text-uppercase fz-menu info">¿quienes somos?</span> </a>
                                    <a href="#" class="navbar-toggler border-0"> <span class="text-uppercase fz-menu info">servicios</span> </a>
                                    <a href="#" class="navbar-toggler border-0"> <span class="text-uppercase fz-menu info">contacto</span> </a>
                                </div>
                                <form class=" row">
                                    <input class="form-control mt-3 mr-2 col-8" type="search" name="buscando" placeholder="Buscar">
                                    <button class="btn-buscador my-2 col-3 offset mt-3 py-1 " type="submit"><i class="fas fa-search"></i></button>
                                </form>
                        </div>
                    </div>   
                </div>
            </div>

        </div>
        
<!--::::::::::::::::::::::::::::::::TERMINA LA BARRA DE NAVEGACION:::::::::::::::::::::::::::::::::

----------------------------------------------------------------------------------------------------------------

:::::::::::::::::::::::::::::::::::INICIA PLANTILLA DE CONTENIDO :::::::::::::::::::::::::::::::::::::-->

<div class="p-cont my-2">
    @yield('contenido')



</div>

<!--::::::::::::::::::::::::::::::::TERMINA LA PLANTILLA DE CONTENIDO:::::::::::::::::::::::::::::::::

----------------------------------------------------------------------------------------------------------------

:::::::::::::::::::::::::::::::::::INICIA FOTTER:::::::::::::::::::::::::::::::::::::-->

<div class="footer container-fluid bg-barra mb-0" >
    @yield('footer')
        <div class="container text-uppercase">
            <div class="row">
                <div class="col d-flex justify-content-center py-4">
                    <a href="#"><span class="c-blanco text-center fuente-titulo h5">muda muda show</span></a>
                </div>                
            </div>
            <div class="row cont-reducido">
                <div class="col d-flex justify-content-between pt-2  border-top border-bottom ">
                        <a href="#" class="redes"><i class="fab fa-facebook iconos-e"></i></a>
                        <a href="#" class="redes"><i class="fab fa-twitter-square iconos-e"></i></a>
                        <a href="#" class="redes"><i class="fab fa-instagram iconos-e"></i></a>
                        <a href="#" class="redes"><i class="fab fa-youtube iconos-e"></i></a>
                </div>                
            </div>
            <div class="row cont-reducido-b">
                <div class="col py-2">
                    <div class="d-block  d-lg-flex justify-content-lg-between border-0 text-center">
                        <a href="#" class=" border-0"> <span class="text-uppercase fz-menu info ">¿quienes somos?</span> </a>
                        <a href="#" class=" border-0"> <span class="text-uppercase fz-menu info ">servicios</span> </a>
                        <a href="#" class=" border-0"> <span class="text-uppercase fz-menu info ">contacto</span> </a>
                    </div>
                </div>
            </div>
            <div class="row cont-reducido-b">
                <div class="col py-2">
                    <div class="d-flex justify-content-center border-0 text-center">
                        <span style="color: white; font-size:10px;">Todos los derechos reservados 2020 &copy</span>
                    </div>
                </div>
            </div>
        </div>
</div>










<script>
CKEDITOR.replace( 'summary-ckeditor' );
CKEDITOR.replace( 'summary-ckeditor2' );

</script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>