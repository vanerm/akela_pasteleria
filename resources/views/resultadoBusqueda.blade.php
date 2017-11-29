<!--
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 19/11/2017
 * Time: 11:03 PM
 */
-->
@extends("layouts.layout")

@section("titulo")
    Resultado Búsqueda
@endsection

@section("content")
    <div class="container">
        <div id="secciones" class="interna">

            <div class="jumbotron" >
                <div class="container">
                    <h2>
                        Productos
                    </h2>
                    {{$products->appends(["buscar"=>$buscar])->links()}}
                    <ul>
                        @foreach($products as $product)
                            <li>
                                <a href="/productos/{{$product->id}}">
                                    {{$product->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    {{$products->appends(["buscar"=>$buscar])->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
