<!--
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 19/11/2017
 * Time: 9:05 PM
 */
-->

@extends("layouts.layout")

@section("titulo")
    Listado Productos
@endsection

@section('content')
    <div class="container">
        <div id="secciones" class="interna">

            <div class="jumbotron" >
                <!--
                <div class="col-md-12">
                    <img class="img-responsive"src="images2/marquesina.png" style="width:100%">
                    <div class="caption">
                    </div>
                </div>
                -->
                <div  class="container">
                    <h2 id="listadoProductos" class="text-center">
                        <strong> Nuestros Productos</strong>
                    </h2>
                    <br/>
                    <ul>
                        @foreach($products as $product)
                                <div class="col-xs-12 col-sm-6 col-md-4" >
                                    <div class="thumbnail">
                                        <a href="/productos/{{$product->id}}">
                                            <img class="img-responsive" src="/{{$product->image}}" style="width:100%">
                                            <div id="productos" class="caption">
                                                <p>{{$product->name}}</p>
                                            </div>
                                        </a>
                                    </div>
                                    <br/>
                                </div>
                        @endforeach
                           <!-- {{$products =App\Product::paginate(6)}} -->
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection