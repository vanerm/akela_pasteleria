
@extends('layouts.layout')

@section("titulo")
    Mi Perfil
@endsection

@section('content')

<div class="container">
    <div id="secciones" class="interna">

            <div class="jumbotron" >

                <div class="col-md-12">
                    <img class="img-responsive"src="images2/marquesina.png" style="width:100%">
                    <div class="caption">
                    </div>
                </div>

                <div class="container">
                    <h2>Perfil de:  </h2>

                    <ul>
                        <li>Nombre: {{auth()->user()->name}} </li>
                        <li>Email: {{auth()->user()->email}} </li>
                    </ul>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ya estas logueado: {{auth()->user()->name}} !
                    @if(auth()->user()->type==1)
                        <div>
                            <a href="/registerAdmin">
                                Registrar otro Admin
                            </a>
                        </div>
                    @endif


                </div>
            </div>

    </div>
</div>
@endsection

