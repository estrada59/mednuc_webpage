@extends('layout.master')

@section('title', 'Nosotros - Medicina Nuclear')

@section('menu_nosotros', 'active')

@section('cuerpo')

    <div id="main-container">

        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div id="page-header" class="parallax" data-stellar-background-ratio="0.7"
                style="background-image: url(images/backgrounds/page-header-1.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>Nosotros</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>Bienvenidos</h6>
                            <h2>Nosotros somos Medicina Nuclear</h2>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container pb-4">
                <div class="row">
                    <div class="col-md-6">

                        {{-- <h3 class="mb-4">Best medical solutions</h3> --}}

                        <p>Medicina Nuclear de Chiapas fue inaugurado en Tuxtla Gutiérrez el 03 de marzo de 2003 por su fundador y propietario, el Dr. Jorge Luis Cisneros Encalada. El Dr. Cisneros realizó la residencia de Medicina Nuclear en 1996 en el Hospital de Especialidades del Centro Médico Nacional Siglo XXI del IMSS.</p>

                        <p>Fue el Presidente Fundador del Colegio de Medicina Nuclear de México A. C., y es el actual vocal social de la Federación Mexicana de Medicina Nuclear e Imagen Molecular A. C. Además, fue anfitrión y organizador del XXXIX Congreso Nacional llevado a cabo del 4 al 7 de mayo de 2005 en el Hotel Camino Real en Tuxtla Gutiérrez, Chiapas.</p>

                    </div><!-- col -->

                    {{-- <div class="col-md-6 pt-md-5 pt-xl-0">

                        <div class="progress-bar-title">General Medicine</div>

                        <div class="progress">
                            <div class="progress-bar" data-width="88">
                                <span>88%</span>
                            </div><!-- progress-bar -->
                        </div><!-- progress -->

                        <div class="progress-bar-title">Stomatology</div>

                        <div class="progress">
                            <div class="progress-bar" data-width="75">
                                <span>75%</span>
                            </div><!-- progress-bar -->
                        </div><!-- progress -->

                        <div class="progress-bar-title">Surgery</div>

                        <div class="progress">
                            <div class="progress-bar" data-width="98">
                                <span>98%</span>
                            </div><!-- progress-bar -->
                        </div><!-- progress -->

                        <div class="progress-bar-title">Medical tests</div>

                        <div class="progress">
                            <div class="progress-bar" data-width="81">
                                <span>81%</span>
                            </div><!-- progress-bar -->
                        </div><!-- progress -->

                        <div class="progress-bar-title">Plastic Surgery</div>

                        <div class="progress">
                            <div class="progress-bar" data-width="86">
                                <span>86%</span>
                            </div><!-- progress-bar -->
                        </div><!-- progress -->

                    </div><!-- col --> --}}

                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9 mb-5">
                            <iframe src="https://www.youtube.com/embed/f5FxLyHBppQ" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                        </div><!-- embed-responsive -->
                    </div>


                </div><!-- row -->
            </div><!-- container -->

            <section class="full-section dark-section parallax" id="section-1" data-stellar-background-ratio="0.3">

                <div class="full-section-overlay-color"></div>

                <div class="full-section-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">

                                <div class="counter">

                                    <i class="smartmed-icon-gavel"></i>
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
                    <div class="col-sm-4 col-lg-4">

                        <div class="team-member">
                            <div class="team-member-thumb">

                                <a href="team.html"><img src="images/about/team/image-5.jpg" alt=""></a>

                            </div><!-- team-member-thumb -->
                            <div class="team-member-details">

                                <h4><a href="team.html">Viridiana Méndez Gutiérrez</a></h4>
                                <p>POE y Lic. en Enfermería</p>

                            </div><!-- team-member-details -->
                        </div><!-- team-member -->

                    </div><!-- col -->
                    <div class="col-sm-4 col-lg-4">

                        <div class="team-member">
                            <div class="team-member-thumb">

                                <a href="team.html"><img src="images/about/team/image-4.jpg" alt=""></a>

                            </div><!-- team-member-thumb -->
                            <div class="team-member-details">

                                <h4><a href="team.html">Dr. Jorge L. Cisneros Encalada</a></h4>
                                <p>Médico Nuclear</p>

                            </div><!-- team-member-details -->
                        </div><!-- team-member -->

                    </div><!-- col -->
                    <div class="col-sm-4 col-lg-4">

                        <div class="team-member">
                            <div class="team-member-thumb">

                                <a href="team.html"><img src="images/about/team/image-3.jpg" alt=""></a>

                            </div><!-- team-member-thumb -->
                            <div class="team-member-details">

                                <h4><a href="team.html">Stephanie Méndez Gutiérrez</a></h4>
                                <p>POE y Lic. en Enfermería</p>

                            </div><!-- team-member-details -->
                        </div><!-- team-member -->

                    </div><!-- col -->
                    
                </div><!-- row -->
            </div><!-- container -->


            {{-- testimonios --}}

            <section class="full-section dark-section parallax" id="section-3" data-stellar-background-ratio="0.3">

                <div class="full-section-overlay-color"></div>

                <div class="full-section-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="headline text-center">

                                                <h6>¿Qué dicen nuestros clientes?</h6>
                                                <h2>Testimonios</h2>

                                            </div><!-- headline -->

                                        </div><!-- col -->
                                    </div><!-- row -->
                                </div><!-- container -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="owl-carousel testimonials-slider">
                                    <div class="item">

                                        <div class="testimonial">

                                            <blockquote>
                                                <p>Excelente lugar, te tratan muy bien, el personal muy amable, hacen que tu estancia sea más llevadera a pesar del problema de salud que traes.</p>
                                            </blockquote>

                                            <h5>Jaqueline Ruiz</h5>

                                        </div><!-- testimonial -->

                                    </div><!-- item -->
                                    <div class="item">

                                        <div class="testimonial">

                                            <blockquote>
                                                <p>Exelente clinica.</p>
                                            </blockquote>

                                            <h5>Christian De La Cruz</h5>

                                        </div><!-- testimonial -->

                                    </div><!-- item -->
                                    {{-- <div class="item">

                                        <div class="testimonial">

                                            <blockquote>
                                                <p>Phasellus ac accumsan lectus. Nunc auctor pulvinar hendrerit. Integer
                                                    tincidunt, leo in vehicula ullamcorper, mauris turpis sollicitudin purus, a
                                                    vehicula neque lacus.</p>
                                            </blockquote>

                                            <h5>Bryan Harris</h5>

                                        </div><!-- testimonial -->

                                    </div><!-- item --> --}}
                                </div><!-- testimonials-slider -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                </div><!-- full-section-container -->
            </section><!-- full-section -->

            {{-- breve historia --}}

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="headline text-center">

                                        <h6>Trabajamos con gusto para usted</h6>
                                        <h2>Breve Historia</h2>

                                    </div><!-- headline -->

                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- container -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ul class="timeline">
                            <li>

                                <div class="row">
                                    
                                    <div class="col-md-2 ml-auto">

                                        <div class="period">1996</div>

                                    </div><!-- col -->
                                    
                                    <div class="col-md-5">

                                        <h4>Comienzos</h4>

                                        <p>El Dr. Jorge L. Cisneros realizó la especialidad de Medicina Nuclear en el Hospital de Especialidades del Centro Médico Nacional Siglo XXI.</p>
                                        <img src="images\nosotros\imss.jpg">

                                    </div><!-- col -->
                                </div><!-- row -->

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 order-2 order-md-1 text-md-right">

                                        <h4>1er. Clínica de Medicina Nuclear</h4>

                                        <p>El Dr. Jorge L. Cisneros fundó la primer clínica de Medicina Nuclear en Chiapas.</p>

                                        <img src="images\nosotros\clinica.jpg">

                                    </div><!-- col -->
                                    <div class="col-md-2 order-1 order-md-2">

                                        <div class="period">Junio de 2003</div>

                                    </div><!-- col -->
                                </div><!-- row -->

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-2 ml-auto">

                                        <div class="period">Enero de 2007</div>

                                    </div><!-- col -->
                                    <div class="col-md-5">

                                        <h4>Presidente y Fundador</h4>

                                        <p>Fundó el Colegio de Medicina Nuclear de México A. C., el cual fue creado para tener una organización de opinión crítica en busca de garantía, calidad y certeza en el ejercicio profesional.</p>

                                        <img src="images\nosotros\colegio.jpg">

                                    </div><!-- col -->
                                </div><!-- row -->

                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 order-2 order-md-1 text-md-right">

                                        <h4>Remodelación</h4>

                                        <p>Se finaliza con la Remodelación de las instalaciones.</p>

                                        <img src="images\nosotros\remodelacion.jpg">

                                    </div><!-- col -->
                                    <div class="col-md-2 order-1 order-md-2">

                                        <div class="period">Dic 2014</div>

                                    </div><!-- col -->
                                </div><!-- row -->

                            </li>
                            {{-- <li>

                                <div class="row">
                                    <div class="col-md-2 ml-auto">

                                        <div class="period">May 2018</div>

                                    </div><!-- col -->
                                    <div class="col-md-5">

                                        <h4>10K patients treated</h4>

                                        <p>Nullam diam velit, mollis vel nisl vel, malesuada aliquam urna. Proin hendrerit, augue a
                                            blandit tincidunt, ante ex pellentesque neque, eget convallis nulla nisl non est.
                                            Pellentesque vestibulum ante at nisi commodo dapibus sed et elit.</p>

                                    </div><!-- col -->
                                </div><!-- row -->

                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 order-2 order-md-1 text-md-right">

                                        <h4>New successes in the research for cancer cure</h4>

                                        <p>Nunc magna risus, condimentum at tincidunt ac, viverra suscipit nunc. Proin sit amet
                                            sem odio. Duis eu magna non orci lobortis tincidunt accumsan sed velit. Maecenas
                                            tincidunt a est eu iaculis.</p>

                                    </div><!-- col -->
                                    <div class="col-md-2 order-1 order-md-2">

                                        <div class="period">Oct 2018</div>

                                    </div><!-- col -->
                                </div><!-- row -->

                            </li> --}}
                        </ul>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <br>
            <br>

        </div><!-- PAGE CONTENT -->


       
    </div><!-- MAIN CONTAINER -->

@endsection  