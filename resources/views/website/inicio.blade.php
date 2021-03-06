@extends('layout.master')

@section('title', 'Inicio - Medicina Nuclear')

@section('menu_inicio', 'active')

@section('cuerpo')
    
    <!-- PAGE CONTENT -->
    <div id="page-content">

        <div class="main-slider-container">
            <div class="owl-carousel main-slider">
                <div class="item" style="background-image:url(images/index/main-slider/bg-slide-1.jpg);">

                    <div class="slide-overlay"></div>

                    <div class="slide-description">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <h1>El mejor equipo médico</h1>

                                    <p>Contamos con equipo médico especializado en medicina nuclear<br>
                                       para proporcionarte el mejor servicio.</p>

                                    <a class="btn btn-default waves" href="{{ route("contacto")}}">Haz una cita</a>

                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- container -->

                    </div><!-- slider-description -->

                </div><!-- item -->
                <div class="item" style="background-image:url(images/index/main-slider/bg-slide-2.jpg);">

                    <div class="slide-overlay"></div>
                    
                    <div class="slide-description">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <h1>Nosotros estamos aquí para ti</h1>

                                    <p>Ofrecemos servicios de diagnóstico y tratamiento en Medicina Nuclear.<br>
                                        </p>

                                    <a class="btn btn-default waves" href="{{ route("contacto")}}">Haz una cita</a>

                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- container -->

                    </div><!-- slider-description -->

                </div><!-- item -->
                <div class="item" style="background-image:url(images/index/main-slider/bg-slide-3.jpg);">

                    <div class="slide-overlay"></div>

                    <div class="slide-description">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <h1>Nuestra visión</h1>

                                    <p>Ser un centro de referencia en el sureste mexicano
                                        <br>
                                        proporcionando un servicio de gabinete de Medicina Nuclear, 
                                        <br>
                                        con la mejor atención y calidad de servicio a nuestros clientes.</p>

                                    <a class="btn btn-default waves" href="{{ route("contacto")}}">Haz una cita</a>

                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- container -->

                    </div><!-- slider-description -->

                </div><!-- item -->
            </div><!-- main-slider -->
        </div><!-- main-slider-container -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="headline text-center">

                        <h6>Las mejores soluciones médicas</h6>
                        <h2>Bienvenidos a Medicina Nuclear</h2>

                    </div><!-- headline -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

      
        <section class="full-section dark-section parallax" id="section-1" data-stellar-background-ratio="0.3">

            <div class="full-section-overlay-color"></div>

            <div class="full-section-container">

                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4">

                            <div class="counter">

                                <i class="smartmed-icon-prisoner"></i>
                                <div class="counter-value" data-value="4270"></div>
                                <div class="counter-details">Pacientes atendidos</div>

                            </div><!-- counter -->

                        </div><!-- col -->
                        <div class="col-md-4 col-sm-4">

                            <div class="counter">

                                <i class="smartmed-icon-judge"></i>
                                <div class="counter-value" data-value="1"></div>
                                <div class="counter-details">Doctor</div>

                            </div><!-- counter -->

                        </div><!-- col -->
                        <div class="col-md-4 col-sm-4">

                            <div class="counter">

                                <i class="smartmed-icon-typewriter"></i>
                                <div class="counter-value" data-value="80" data-symbol-before="+" data-symbol-after=""></div>
                                <div class="counter-details">Servicios</div>

                            </div><!-- counter -->

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- full-section-container -->
        </section><!-- full-section -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="headline text-center">

                        <h6>Conoce a nuestro equipo</h6>
                        <h2>Especialista</h2>

                    </div><!-- headline -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="container">
            <div class="row">
               
                <div class="col-sm-6 col-lg-4">

                    <div class="team-member">
                        <div class="team-member-thumb">

                            <a href="team.html"><img src="images/about/team/image-5.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="team.html">Viridiana Méndez Gutiérrez</a></h4>
                            <p>POE y Lic. en enfermería</p>

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->

                <div class="col-sm-6 col-lg-4">

                    <div class="team-member">
                        <div class="team-member-thumb">

                            <a href="team.html"><img src="images/about/team/image-4.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="team.html">Dr. Jorge Luis Cisneros Encalada</a></h4>
                            <p>Médico Nuclear</p>

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->

                <div class="col-sm-6 col-lg-4">

                    <div class="team-member">
                        <div class="team-member-thumb">

                            <a href="team.html"><img src="images/about/team/image-3.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="team.html">Stephanie Méndez Gutiérrez</a></h4>
                            <p>POE y Lic. en enfermería</p>

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                   
            </div><!-- row -->
        </div><!-- container -->

        <section class="full-section dark-section parallax" id="section-2" data-stellar-background-ratio="0.3">

            <div class="full-section-overlay-color"></div>

            <div class="full-section-container">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">

                            <h1>17 Años de experiencia en varios casos</h1>
                            <p class="last">Hemos hecho una gran variedad de estudios para el dianóstico y tratamiento 
                                de varios padecimientos.</p>

                        </div><!-- col -->
                        <div class="col-lg-4 text-lg-right">

                            <a class="btn btn-default waves mb-2 mb-md-0 mt-3 mt-lg-0" href="contacto">Comuníquese con nosotros</a>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- full-section-container -->
        </section><!-- full-section -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="headline text-center">

                        <h6>¿Qué hacemos nosotros?</h6>
                        <h2>Nuestros servicios</h2>

                    </div><!-- headline -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="container">
            <div class="row">
                {{-- gammagrama pulmonar --}}
                <div class="col-md-6 col-lg-4">

                    <div class="service-box style-1 wow fadeInUp">

                        <i class="smartmed-icon-lungs"></i>

                        <div class="service-box-content">

                            <h4>Gammagrama Pulmonar</h4>

                            <p>La gammagrafía pulmonar permite estudiar el intercambio gaseoso que se lleva acabo en los pulmones. En el estudio ventilatorio visualizamos la ausencia de llegada de aire a determinadas áreas pulmonares. Y en la perfusoria detectamos en que zonas del tejido pulmonar no reciben aporte sanguíneo.</p>

                        </div><!-- service-box-content -->

                    </div><!-- service-box -->

                </div><!-- col -->

                {{-- gammagrama cardiaco --}}
                <div class="col-md-6 col-lg-4">

                    <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.1s">

                        <i class="smartmed-icon-cardiogram-4"></i>

                        <div class="service-box-content">

                            <h4>Gammagrama Cardiaco</h4>

                            <p>El infarto agudo del miocardio es la 1a. causa de muerte en hombres. Este estudio es el método de diagnóstico de elección para la detección oportuna de riesgo de infarto.</p>

                        </div><!-- service-box-content -->

                    </div><!-- service-box -->

                </div><!-- col -->
                
                {{-- tratamiento con yodo --}}
                <div class="col-md-6 col-lg-4">

                    <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.2s">

                        <i class="smartmed-icon-nuclear"></i>

                        <div class="service-box-content">

                            <h4>Tratamientos con Yodo (I-131)</h4>

                            <p>La finalidad del tratamiento es disminuir la actividad excesiva de la glándula, reducir o evitar un incremento excesivo de tamaño y en otros casos erradicar la presencia de células funcionales.</p>

                        </div><!-- service-box-content -->

                    </div><!-- service-box -->

                </div><!-- col -->

                {{-- gammagrama óseo --}}
                <div class="col-md-6 col-lg-4">

                    <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.2s">

                        <i class="smartmed-icon-bones"></i>

                        <div class="service-box-content">

                            <h4>Gammagrama Óseo</h4>

                            <p>La gammagrafía ósea es la mas frecuente de nuestras exploraciones, debido a su disponibilidad y gran sensibilidad para detectar alteraciones en el metabolismo óseo, bien sean de características benignas o malignos.</p>

                        </div><!-- service-box-content -->

                    </div><!-- service-box -->

                </div><!-- col -->

                {{-- Samario 153 --}}
                <div class="col-md-6 col-lg-4">

                    <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.1s">

                        <i class="smartmed-icon-atoms"></i>

                        <div class="service-box-content">

                            <h4>Tratamiento con Samario 153</h4>

                            <p>Se emplea con fines diagnósticos y en terapia paliativa del dolor producido por metástasis óseas, por lo general producidas por cáncer de próstata.</p>

                        </div><!-- service-box-content -->

                    </div><!-- service-box -->

                </div><!-- col -->

                {{-- gammagrama gastroesofágico --}}
                <div class="col-md-6 col-lg-4">

                    <div class="service-box style-1 wow fadeInUp">

                        <i class="smartmed-icon-stomach"></i>

                        <div class="service-box-content">

                            <h4>Gammagrama Gastroesofágico</h4>

                            <p>Es una exploración que revela en TIEMPO REAL la existencia de reflujo gastroesofágico. Además de tratarse de un estudio de fácil realización, es poco invasivo. Por lo que es frecuentemente empleado ante la sospecha de reflujo gastroesofágico en niños.</p>

                        </div><!-- service-box-content -->

                    </div><!-- service-box -->

                </div><!-- col -->
                
                
            </div><!-- row -->
        </div><!-- container -->

        <br><br>

    </div><!-- PAGE CONTENT -->

@endsection    



    