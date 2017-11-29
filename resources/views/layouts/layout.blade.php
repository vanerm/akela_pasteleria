<!--
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 15/11/2017
 * Time: 8:59 PM
 */
-->
<!--Open -->

<!DOCTYPE html>

<html lang="en">
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <title>
        @yield("titulo")
    </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile-first -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jquery  es lo primero que hay que importar en el header-->
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- para bootstrap -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript">
    $( document ).ready(function){
      $(".button-collapse").sideNav();
    }
    </script> -->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" cz-shortcut-listen="true">


<!--Header -->

<header class="header">
    <nav class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-links">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- logo -->
                <a class="navbar-brand" href="/home">
                    <img class= "img-circle" alt="Brand" src="https://scontent-eze1-1.cdninstagram.com/t51.2885-19/s320x320/19379845_162930180915505_968021204008960000_a.jpg" width="130" height="130" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-links">
                <ul id= "navbarItems" class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="/home">AKELA</a></li>
                    <li><a class="page-scroll" href="/productos">Productos</a></li>
                    <li><a class="page-scroll" href="/categorias">Categorias</a></li>
                <!-- <li><a class="page-scroll" href="/tortas">Tortas</a></li>
                    <li><a class="page-scroll" href="/tartas">Tartas</a></li>
                    <li><a class="page-scroll" href="/cositasdulces">Cositas Dulces</a></li>-->
                    <li>
                        <form class="buscar" method="GET" action="/buscarProductos">
                            <input class="form-control buscar" type="text" name="buscar">

                            <input type="submit" name="" value="Buscar" class="btn btn-default">
                        </form>
                    </li>

                    @if(auth()->check() && auth()->user()->type == 1)
                        <li>
                            <a href="/agregarProducto">
                                Agregar Producto
                            </a>
                        </li>
                    @endif

                    @if (auth()->check())
                        <li>
                            <!--<a class="page-scroll" href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a> -->

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-log-in"></span>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </li>
                    <li>
                        <a class="page-scroll" href="/miPerfil"><span class="glyphicon glyphicon-log-in"></span> Mi Perfil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/wishlist"><span class="glyphicon glyphicon-shopping-cart"></span>Mi Carrito</a>
                    </li>
                   @else
                        <li>
                            <a class="page-scroll" class="page-scroll" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Registración</a>
                        </li>
                    @endif



                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@yield('content')


<!--Footer -->

<footer class="footer">
    <div class="container">
        <ul class="nav navbar-nav">
            <section id="social-2">
                <li><a href="https://www.instagram.com/akelapasteleria/"><img src="./images/insta_icon.png" alt="icon" style="float:right"></a></li>
                <li><a href="https://www.facebook.com/akelapasteleria"><img src="./images/face_icon.png" alt="icon" style="float:right"></a></li>
                <li><a class="page-scroll" href="/preguntasfrecuentes"> <img src="./images/preg_icon.png" alt="icon" style="float:right"></a></li>

            </section>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Akela Pasteleria © All Rights Reserved</a></li>

        </ul>
    </div>
</footer>

<!--Close -->

<!-- JS Body -->
<script src="assets/libs/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/libs/bootstrap-3/js/bootstrap.min.js"></script>



</body>
</html>

