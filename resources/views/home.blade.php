
@extends('layouts.layout')

@section("titulo")
    Akela
@endsection

@section('content')

<div class="main">

    <section id="Markesina" class="scroll-section">

        <!-- First Container -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <div id="secciones" class="interna">
                    <img src="images2/markesina3.jpg" class="img-responsive" alt="AKELA" style="width: 100%">
                </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Second Container -->
     <section id="InfoAkela" class="small">
        <div class="container" id="infocontent">
            <h2 id="tituloakela"><strong>  Akela Pastelería </strong></h2>
            <div class="row">
                <div  class="col-sx-12 col-sm-6 col-md-4">
                    <p style="text-align: justify">
                        <strong >Quiénes somos?</strong><br/>
                        Nuestra pastelería es una empresa de propiedad y gestión familiar que lleva varias generaciones,
                        antiguamente de panaderos y cocineros. En AKELA PASTELERÍA nos comprometemos a utilizar siempre,
                        en todos los productos que elaboramos, ingredientes frescos y de primera calidad. Le garantizamos
                        que en nuestro establecimiento encontrará lo más selecto en productos horneados.

                        Siempre el local repleto de pasteles, tartas, galletas, delicias de chocolate y otras exquisiteces
                        muy tentadoras. Si lo que busca es una creación personalizada, trabajaremos codo a codo con usted
                        para lograr un diseño que combine cualidad y creatividad.

                    </p>
                    <p style="text-align: justify">
                        <strong>Nuestro Servicio</strong><br/>
                            Brindamos un exclusivo servicio de catering, que le permite al agasajado del evento seleccionar
                            cada uno de los productos que se van a servir, pudiendo asi personalizarlos a su gusto con distintos
                            elementos que tenemos preparados para la circunstancia. Desde aplicar nombres, fotos, caras,
                            pisos, mezclar los ingredientes que se antojen siempre que no pierda la filosofia de Akela.
                    </p>
                </div>

                <div class="col-sx-12 col-sm-6 col-md-4">
                    <p style="text-align: justify">
                        <strong>Nuestras Materias Primas</strong><br/>
                        En AKELA elaboramos todos nuestros productos con ingredientes de primerísima calidad y 100% naturales.
                        Aquí no hay aditivos químicos que valgan. Al primer mordisco, se dará cuenta de por qué nuestros
                        clientes no se cansan de venir por nuestros productos, todos frescos del día. Tenemos un convenio
                        unico con una reconocida empresa de la Patagonia que nos provee del mas exelentisimo chocolate y frutos
                        rojos que nos brindan un sabor unico e irrepetible, no lo vas a poder encontrar en otro lado, lorem
                        isptum torta nos comemos toda la torta que traen de esta pasteleria que es buenisima te lo aseguramos.
                    </p>
                    <p style="text-align: justify">
                        <strong>Nuestras Categorias</strong><br/>
                        Realizamos tartas, tortas, alfajores, macarrones, bocaditos dulces, postres de te,  personalizadas para celebraciones y cumpleaños, o simplemente para darse un capricho,
                        que van desde las eleboraciones más tradicionales hasta las últimas tendencias en pastelería.
                        Siempre con nuestra innovando, vanguardiando, producción artesana y materias primas de primera calidad.
                    </p>
                </div>

                <div class="col-sx-12  col-md-4">
                    <img src="images2/macarrons.png" class="img-responsive" alt="AKELA">
                </div>

            </div>
        </div>
     </section>


        <!--Third Container -->
        <!--Carrousel -->
    <section class="small" id="Carrousel">
            <div class="container">
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
                            <img class="responsive" src="images2/carrousel/tartadefrutillas.jpg" alt="Tartas" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Tartas</h3>
                                <!-- <p>Las tartas mas ricas!</p> -->
                            </div>
                        </div>
                        <div class="item">
                            <img class="responsive" src="images2/carrousel/browniemerengue2.png" alt="Tortas" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Tortas</h3>
                                <!-- <p>Deliciosas!</p> -->
                            </div>
                        </div>
                        <div class="item">
                            <img class="responsive" src="images2/carrousel/macarrons.png" alt="Cositas Dulces" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Cositas Dulces</h3>
                                <!-- <p>Las vas a amar!</p> -->
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
            </div>
            <br>
    </section>

        <!-- Fourth Container(Grid) -->
        <!-- Categorias -->
    <section class="small" >
            <div  class="container">
                <h2 id="tituloakela"><strong>Nuestros Productos </strong> </h2>

                <div class="row">
                    <div class="col-sx-12 col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="/categorias/52">
                                <img class="img-responsive" src="images/chocotorta.jpg" alt="Tortas" style="width:100%">
                                <div id="productos" class="caption">
                                    <p style="font-size: medium">Tortas</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sx-12 col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="/categorias/53">
                                <img class="img-responsive" src="images/lemonpie.jpg" alt="Tartas" style="width:100%">
                                <div id="productos" class="caption">
                                    <p style="font-size: medium">Tartas</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sx-12 col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="/categorias/54">
                                <img class="img-responsive"src="images/cositasdulces.jpg" alt="Dulces" style="width:100%">
                                <div id="productos" class="caption">
                                    <p style="font-size: medium">Cositas Dulces</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

           <!-- Fourth Container(Formulario y GoogleMaps) -->
    {{--<section class="small" id="FormularioMaps">
        <div class="container">
            <h3 id="tituloakela" >Probá nuestra chocotorta en casa!</h3>

                <div class="col-md-6">
                    <div class=class="screen-reader-response">
                        <div id="map">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HH0wgkMo3GA" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>--}}
            {{--
            <div class="row">
                <div class="col-sx-12 col-sm-6 col-md-6">
                    <div class="well">
                        <div role="form" class="wpcf7" id="wpcf7-f26-o1" lang="es-ES" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/#wpcf7-f26-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="26">
                                    <input type="hidden" name="_wpcf7_version" value="4.8.1">
                                    <input type="hidden" name="_wpcf7_locale" value="es_ES">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f26-o1">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                    <input type="hidden" name="_wpcf7_nonce" value="ede7dcb88b">
                                </div>
                                <p><span class="wpcf7-form-control-wrap nombre">
                                        <input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Nombre">
                                    </span>
                                    <br>
                                    <span class="wpcf7-form-control-wrap email">
                                        <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email">
                                    </span>
                                    <br>
                                    <span class="wpcf7-form-control-wrap asunto"><input type="text" name="asunto" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="asunto" aria-required="true" aria-invalid="false" placeholder="Asunto">
                                    </span>
                                    <br>
                                    <span class="wpcf7-form-control-wrap mensaje">
                                        <textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control no-resize footer" aria-required="true" aria-invalid="false" placeholder="Mensaje">

                                        </textarea>
                                    </span>
                                    <br>
                                    <input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit btn btn-primary"><span class="ajax-loader"></span></p>
                                <div class="wpcf7-response-output wpcf7-display-none">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="map-wrapper responsive-frame">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d105073.20291591213!2d-58.43329849999999!3d-34.61585265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1429664118146" width="550" height="400" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                    <p class="regular-text">Buenos Aires, Argentina</p>
                    <p>+54911 2634-8891</p>
                    <p><a href="mailto:akelapasteleria@gmail.com">akelapasteleria@gmail.com</a></p>
                </div>
            </div>--}}
        {{--</div>
    </section>--}}
</div>

@endsection
