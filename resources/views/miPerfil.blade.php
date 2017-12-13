
@extends('layouts.layout')

@section("titulo")
    Mi Perfil
@endsection

@section('content')

<div class="container">
    <div id="secciones" class="interna">

            <div class="jumbotron" >

                <div class="col-md-12">
                    <br/>
                    <img class="img-responsive"src="images2/loginfoto.jpg" style="width:100%">
                    <div class="caption">
                    </div>
                    <br/>
                </div>

                <div class="container">
                    <h2 id="productos"><strong>Perfil de:</strong></h2>

                    <ul>
                        <li><strong>Nombre:</strong> {{auth()->user()->name}} </li>
                        <li><strong>Email: </strong>{{auth()->user()->email}} </li>
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

