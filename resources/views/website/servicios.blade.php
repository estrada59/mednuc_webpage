@extends('layout.master')

@section('title', 'Servicios - Medicina Nuclear')

@section('menu_servicios', 'active')

@section('cuerpo')

    <!-- PAGE CONTENT -->
    <div id="page-content">

        <div id="page-header" class="parallax" data-stellar-background-ratio="0.3"
            style="background-image: url(images/backgrounds/page-header-2.jpg);">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Servicios</h1>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- page-header -->

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('gamm_cardiaco')}}"><img src="images/about/team/image-1.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('gamm_cardiaco')}}">Gammagrama Cardiaco</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('gamm_oseo')}}"><img src="images/about/team/image-2.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('gamm_oseo')}}">Gammagrama Óseo</a></h4>

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('gamm_cerebral')}}"><img src="images/about/team/image-3.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('gamm_cerebral')}}">Gammagrama de perfusión cerebral</a></h4>

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('gamm_tiroideo')}}"><img src="images/about/team/image-4.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('gamm_tiroideo')}}">Gammagrama Tiroideo</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->

                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('gamm_hepatoesplenico')}}"><img src="images/about/team/image-5.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('gamm_hepatoesplenico')}}">Gammagrama Hepatoesplénico</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('gamm_renal')}}"><img src="images/about/team/image-6.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('gamm_renal')}}">Gammagrama Renal</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('gamm_mama')}}"><img src="images/about/team/image-7.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('gamm_mama')}}">Gammagrama de mama</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('gamm_pulmonar')}}"><img src="images/about/team/image-8.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('gamm_pulmonar')}}">Gammagrama Pulmonar</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->

                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('trat_cancer_prostata')}}"><img src="images/about/team/image-5.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('trat_cancer_prostata')}}">Tratamiento para cancer de prostata</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('trat_yodo')}}"><img src="images/about/team/image-6.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('trat_yodo')}}">Tratamiento de yodo (I-131)</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('trat_artritis')}}"><img src="images/about/team/image-7.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('trat_artritis')}}">Tratamiento para Artritis</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
                <div class="col-sm-6 col-lg-3">

                    <div class="team-member">
                        <div class="team-member-thumb rounded-circle">

                            <a href="{{route('spect_ct')}}"><img src="images/about/team/image-8.jpg" alt=""></a>

                        </div><!-- team-member-thumb -->
                        <div class="team-member-details">

                            <h4><a href="{{route('spect_ct')}}">SPECT-CT</a></h4>
                            

                        </div><!-- team-member-details -->
                    </div><!-- team-member -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        

        <br><br>


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

                            <a class="btn btn-default waves mb-2 mb-md-0 mt-3 mt-lg-0" href="contacto.php">Comuníquese con nosotros</a>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- full-section-container -->
        </section><!-- full-section -->

        
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">

                    <div class="embed-responsive embed-responsive-16by9 mb-5">
                        <iframe src="https://www.youtube.com/embed/f5FxLyHBppQ" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                    </div><!-- embed-responsive -->
                   
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

       

    </div><!-- PAGE CONTENT -->





@endsection