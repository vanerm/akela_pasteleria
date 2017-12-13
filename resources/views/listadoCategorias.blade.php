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

    <div class="container alto-minimo">
        <div id="secciones" >
            <div class="jumbotron" >

                <div class="col-xs-12 col-sm-6 col-md-4">
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
                            <div class="list-group">
                                <a href="/categorias/{{$category->id}}" class="list-group-item">
                                    {{$category->name}}
                                </a>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
