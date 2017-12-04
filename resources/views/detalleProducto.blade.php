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
    Detalle Producto
@endsection

@section("content")
    <div class="container">
        <div id="secciones" class="interna">

            <div class="jumbotron" >

                <div class="container">
                    <h2>
                        Detalle de Producto: {{$product->name}}
                    </h2>
                    <li>
                        Stock: {{$product->stock}}
                    </li>
                    <li>
                        Precio: $ {{$product-> price}}
                    </li>
                    <li class="text-justify">
                        Descripcion: {{$product->description}}
                    </li>
                    <li>
                        <a href="/categorias/{{$product->category->id}}">
                            Categoria: {{$product->category->name}}
                        </a>
                    </li>
                    <br/>

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="img-responsive" src="/{{$product->image}}" style="width:100%">
                            <div class="caption">
                                <p>{{$product->name}}</p>
                            </div>
                        </div>

                        @if (auth()->check() && auth()->user()->type == 1)
                            <form action="/borrarProducto" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" name="" value="Borrar" class="btn btn-danger">
                            </form>
                        @endif

                        @if ($inWishlist)
                            <form action="/quitarWishlist" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="submit" name="" value="Quitar del Carrito" class="btn btn-warning">
                            </form>
                        @else
                            <form action="/agregarWishlist" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="submit" name="" value="Agregar al Carrito" class="btn btn-primary">
                            </form>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection