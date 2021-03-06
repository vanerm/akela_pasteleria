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
    WishList
@endsection

@section("content")


    <div class="container">
        <div id="secciones" class="interna">
            <div class="jumbotron" >
                    <div class="col-md-12">
                        <br/>
                        <img class="img-responsive"src="images2/carrito.jpg" style="width:100%">
                        <div class="caption">
                        </div>
                        <br/>
                    </div>


                <div class="container">
                <h2 id="productos">
                   <strong>WishList</strong>
                </h2>
                    <br/>
                <ul>
                    @forelse($products as $product)
                        <ul class="list-group-item">
                            <a href="/productos/{{$product->id}}">
                                {{$product->name}}
                            </a>
                        </ul>
                    @empty
                        <p id="productos">
                            No hay nada en tu lista de favoritos!
                        </p>
                    @endforelse
                </ul>
                </div>
            </div>
        </div>
    </div>
@endsection