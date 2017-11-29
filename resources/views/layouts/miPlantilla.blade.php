<!--
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 19/11/2017
 * Time: 8:56 PM
 */
-->

<!DOCTYPE html>
<html>
<head>
    <title>
        @yield("titulo")
    </title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/micss.css">
    @yield("css")
</head>
<body>
<div class="container">
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/categorias">
                        Categorias
                    </a>
                </li>

                <li>
                    <a href="/productos">
                        Productos
                    </a>
                </li>
                <li>
                    <a href="/wishlist">
                        Mi Wishlist
                    </a>
                </li>
                @if (auth()->check())
                <li>
                    Bienvenido {{auth()->user()->name}}
                </li>

                @if(auth()->check() && auth()->user()->type == 1)
                    <li>
                        <a href="/agregarProducto">
                            Agregar Producto
                        </a>
                    </li>
                @endif

                <li>
                    <form method="post" action="/logout">
                        {{csrf_field()}}
                        <input type="submit" value="Logout" class="btn btn-link">

                    </form>
                </li>
                @else
                <li>
                    <a href="/register">
                        Registración
                    </a>
                </li>
                <li>
                    <a href="/login">
                        Login
                    </a>
                </li>
                @endif
                <li>
                    <form class="buscar" method="GET" action="/buscarProductos">
                        <input class="form-control buscar" type="text" name="buscar">
                        <input type="submit" name="" value="Buscar" class="btn btn-primary">
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <div class="jumbotron">
        <h1>
            <marquee scrollamount="15">WELCOME TO AKELA PASTELERIA</marquee>
        </h1>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @yield("principal")
</div>
</body>
</html>