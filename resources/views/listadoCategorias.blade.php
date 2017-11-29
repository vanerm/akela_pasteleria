<!--
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 19/11/2017
 * Time: 8:38 PM
 */
-->

@extends("layouts.layout")

@section("titulo")
    Listado Categorias
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
                        Categorias
                    </h2>
                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <a href="/categorias/{{$category->id}}">
                                    {{$category->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
