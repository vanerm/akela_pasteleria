<!--
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 26/11/2017
 * Time: 12:32 AM
 */
-->
@extends("layouts.layout")

@section("titulo")
    Mi Carrito
@endsection

@section("content")


    <div class="container">
        <div id="secciones" class="interna">
            <div class="jumbotron" >
                    <div class="col-md-12">
                        <img class="img-responsive"src="images2/marquesina.png" style="width:100%">
                        <div class="caption">
                        </div>
                    </div>

                <div class="container">

                <h2>
                    Mi Carrito
                </h2>
                <ul>
                    @forelse($products as $product)
                        <li>
                            <a href="/productos/{{$product->id}}">
                                {{$product->name}}
                            </a>
                        </li>
                    @empty
                        <p>
                            No hay nada en tu carrito
                        </p>
                    @endforelse
                </ul>
                </div>
            </div>
        </div>
    </div>
@endsection