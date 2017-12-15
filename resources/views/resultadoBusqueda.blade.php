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
                    <h2 id="listadoProductos">
                        Resultado de su Búsqueda
                    </h2>
                    <!---{{$products->appends(["buscar"=>$buscar])->links()}} -->
                    <ul>
                        @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <a href="/productos/{{$product->id}}">
                                        <img class="img-responsive" src="/{{$product->image}}" style="width:100%">
                                        <div id="productos" class="caption">
                                            <p>{{$product->name}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        @endforeach
                    </ul>
                </div>
                    {{$products->appends(["buscar"=>$buscar])->links()}}

            </div>
        </div>
    </div>
@endsection
