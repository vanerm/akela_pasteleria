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
                    <h2  id="listadoProductos" class="text-center" >
                        {{$category->name}}
                    </h2>
                <br/>

                    <ul>
                        @foreach($category->products as $product)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <a href="/productos/{{$product->id}}">
                                <div class="thumbnail">
                                    <img class="img-responsive" src="/{{$product->image}}" style="width:100%">
                                    <div id="productos" class="caption">
                                        <p>{{$product->name}}</p>
                                    </div>
                                </div>
                                    <br/>
                                </a>
                            </div>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

