<!--
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 19/11/2017
 * Time: 9:33 PM
 */
-->

@extends("layouts.layout")

@section("titulo")
    Detalle Categoria
@endsection

@section('content')
    <div class="container">
        <div id="secciones" class="interna">
            <div class="jumbotron" >
                <div class="container">
                    <h2>
                        Detalle de categoria: {{$category->name}}
                    </h2>
                    <h3>
                        Productos
                    </h3>
                    <ul>
                        @foreach($category->products as $product)
                            <li>
                                <a href="/productos/{{$product->id}}">
                                    {{$product->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

