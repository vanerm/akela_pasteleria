<!--
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 25/11/2017
 * Time: 10:42 PM
 */
-->
@extends("layouts.layout")

@section("titulo")
    Agregar Productos
@endsection

@section("content")

<div class="container">
     <div id="secciones" class="interna">

         <div class="jumbotron" >
             <div class="container">

                <h2>
                    Agregar Producto
                </h2>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/agregarProducto" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nombre">
                                Nombre:
                            </label>
                            <input class="form-control" type="text" name="nombre" value="{{old("nombre")}}">
                        </div>
                        <div class="form-group">
                            <label for="stock">
                                Stock:
                            </label>
                            <input class="form-control" type="text" name="stock" value="{{old("stock")}}">
                        </div>
                        <div class="form-group">
                            <label for="precio">
                                Precio:
                            </label>
                            <input class="form-control" type="text" name="precio" value="{{old("precio")}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">
                                Descripción:
                            </label>
                            <textarea class="form-control" name="descripcion">
                                {{old("descripcion")}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoria">
                                Categoria:
                            </label>
                            <select class="form-control" name="categoria">
                                @foreach($categories as $category)
                                    @if ($category->id == old("categoria"))
                                        <option value="{{$category->id}}" selected>
                                            {{$category->name}}
                                        </option>
                                    @else
                                        <option value="{{$category->id}}">
                                            {{$category->name}}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="imagen">
                                Imagen:
                            </label>
                            <input type="file" name="imagen" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="" value="Agregar Producto" class="btn btn-primary">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection