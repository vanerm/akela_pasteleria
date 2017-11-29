@extends('layouts.layout')

@section("titulo")
    Tartas
@endsection

@section('content')

<!-- carrousel  e imagenes -->

<div id="secciones" class="interna">
    <section id="home">
        <div class="container">
            <!-- <div class="col-md-12"> -->

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img class="responsive" src="images2/carrousel/keylimepie2.png" alt="Tartas" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Key Lime Pie</h3>
                            <p>Tartas</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="responsive" src="images2/carrousel/tartahavannete.png" alt="Tortas" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Tarta Havannet</h3>
                            <p>Tartas</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="responsive" src="images2/carrousel/tartacoco2.png" alt="Cositas Dulces" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Tarta de Coco</h3>
                            <p>Tartas</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- </div> -->
        </div>
        <br>

        <!-- cards -->
        <div class="container" id="Productos">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="/productos/225">
                            <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
                            <img class="img-responsive" src="images2/tartas/tartahavannet.png" alt="Tortas" style="width:100%">
                            <div class="caption">
                                <p>Tarta Havannet</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="/productos/210">
                            <!-- <a href="/w3images/nature.jpg" target="_blank"> -->
                            <img class="img-responsive" src="images2/tartas/keilimepie3.png" alt="Tartas" style="width:100%">
                            <div class="caption">
                                <p>Tarta Keilimepie</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="/productos/226">
                            <!-- <a href="/w3images/fjords.jpg" target="_blank"> -->
                            <img class="img-responsive" src="images2/tartas/tartafrutosrojos.png" alt="Dulces" style="width:100%">
                            <div class="caption">
                                <p>Tarta Frutos Rojos</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Footer  -->

@endsection

