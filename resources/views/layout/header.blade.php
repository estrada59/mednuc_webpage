<!-- HEADER -->
<header id="header">

    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <!-- LOGO -->
                <div id="logo">
                    <a href="inicio">
                    <img src='assets/images/logo.png' alt="">
                    </a>
                </div><!-- LOGO -->

            </div><!-- col -->
            <div class="col-md-9">

                <!-- MENU -->
                <nav>

                    <a class="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>
                    
                    <ul class="menu clearfix" id="menu">
                        <li class= "@yield('menu_inicio')">
                            <a href="inicio">Inicio</a>    
                        </li>
                        <li class= "@yield('menu_nosotros')">
                            <a href="nosotros">Nosotros</a>
                        </li>
                        <li class= "@yield('menu_servicios')"">
                            <a href="servicios">Servicios</a>
                        </li>
                    
                        <li class= "@yield('menu_contacto')">
                            <a href="contacto">Contacto</a>
                        </li>

                          <!--
                        <li class="dropdown">
                            <a href="team.html">Team</a>
                            <ul>
                                <li><a class="waves" href="team.html">Chris Martin</a></li>
                                <li><a class="waves" href="team.html">Marisa Carter</a></li>
                                <li><a class="waves" href="team.html">John William</a></li>
                                <li><a class="waves" href="team.html">Martha Davis</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="news.html">News</a>
                            <ul>
                                <li><a class="waves" href="news.html">News right sidebar</a></li>
                                <li><a class="waves" href="news-2.html">News left sidebar</a></li>
                                <li><a class="waves" href="news-3.html">News no sidebar</a></li>
                                <li><a class="waves" href="news-single.html">News single</a></li>
                            </ul>
                        </li> 
                        -->
                    </ul>

                </nav>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

</header><!-- HEADER -->