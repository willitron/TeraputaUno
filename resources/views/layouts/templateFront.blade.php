<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tu-Turno</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="https://wa.me/59178893740"><i class="fa fa-phone"></i>+591 78893740</a>
                                <a href="#"><i class="fa fa-envelope"></i>contact@TuTurno.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->
        </section>

        <nav class="navbar navbar-default {{-- navbar-fixed-top  --}}">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/tuturno.jpeg" alt="Logo" width="71px"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Inicio</a></li>
                        <li><a href="#features">Servicios</a></li>
                        <li><a href="#service">Facilidades</a></li>
                        <li><a href="#price">Precios</a></li>
                        <li><a href="#business">Mas de Nosotros</a></li>
                        <li><a href="#contact">Contactos</a></li>
                        <li class="login"><a href="#contact">Registrarme</a></li>
                        <li class="login"><a href="{{ url('admin/login') }}">Iniciar Sesion</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-fluid-block">
                <div class="container text-center">
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">

                                    <h1>Bienvenido a TuTurno</h1>
                                    <p>Transforme su consulta con información clara y organizada.
                                        Manténgase al día con su agenda, detecte patrones en la evolución terapéutica y haga crecer su práctica con decisiones informadas.
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                            <div class="home-contact">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                                    <input type="submit" class="form-control" value="Use It Free">

                                                </div><!-- /input-group -->


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Sections -->
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">

                        <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="assets/images/ter1.jpg" alt="" />
                            </div>
                        </div>

                        <div class="col-sm-6 margin-top-60">
                            <div class="single_features_right ">
                                <h2>TERAPIA FAMILIAR</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus praesentium, temporibus a eum accusantium et doloremque totam, voluptatum accusamus nobis ab pariatur, iure ipsam numquam voluptate sed necessitatibus eveniet sit!</p>
                                <ul>
                                    <li>Quisque volutpat mattis eros.</li>
                                    <li>Nullam malesuada erat ut turpis.</li>
                                    <li>Suspendisse urna nibh.</li>
                                </ul>
                                <div class="features_buttom">
                                    <a href="" class="btn btn-default">Realizar Consulta</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!--End of Features 2 Section -->
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">



                        <div class="col-sm-6 margin-top-60">
                            <div class="single_features_right ">
                                <h2>TERAPIA DE PAREJAS</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, omnis. Nam distinctio provident in eius! Ipsa totam voluptate architecto reprehenderit provident molestiae assumenda blanditiis, ducimus possimus ad harum magnam sapiente.</p>
                                <ul>
                                    <li>Quisque volutpat mattis eros.</li>
                                    <li>Nullam malesuada erat ut turpis.</li>
                                    <li>Suspendisse urna nibh.</li>
                                </ul>
                                <div class="features_buttom">
                                    <a href="" class="btn btn-default">Realizar Consulta</a>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="assets/images/ter2.webp" alt="" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!--End of Features 2 Section -->


        <section id="service" class="service2 sections lightbg">
            <div class="container">
                <div class="row">
                    <div class="main_service2">
                        <div class="head_title text-center">
                            <h2>SERVICIOS TERAPÉUTICOS</h2>
                            <p>Te acompañamos en tu proceso de bienestar emocional. Descubre los servicios que ofrecemos:</p>
                        </div>

                        <div class="service_content">
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="assets/images/flaticon1.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Terapia Individual</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                       <img src="assets/images/flaticon2.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Terapia de Pareja</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                      <img src="assets/images/flaticon3.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>erapia Infantil</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="assets/images/flaticon4.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Terapia Online</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Service2 Section -->



        <!-- Sections -->
        <section id="price" class="price sections">


            <div class="head_title text-center">
                <h1>Paquete De Servicios Accesibles</h1>
				<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
            </div>
            <!-- Example row of columns -->
            <div class="cd-pricing-container cd-has-margins">
                <div class="cd-pricing-switcher">
                    <p class="fieldset">
                        <input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
                        <label for="monthly-2">Personales</label>
                        <input type="radio" name="duration-2" value="yearly" id="yearly-2">
                        <label for="yearly-2">Familiares</label>
                        <span class="cd-switch"></span>
                    </p>
                </div> <!-- .cd-pricing-switcher -->

                <ul class="cd-pricing-list cd-bounce-invert">
                    <li>
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Basic</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">30</span>
                                        <span class="cd-duration">mo</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>20 Keyword</li>
                                        <li><em><i class="fa fa-remove"></i></em>No Time Tracking</li>
                                        <li><em><i class="fa fa-remove"></i></em>230 - Man Hour</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>Basic</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">320</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>20 Keyword</li>
                                        <li><em><i class="fa fa-remove"></i></em>No Time Tracking</li>
                                        <li><em><i class="fa fa-remove"></i></em>230 - Man Hour</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li class="cd-popular">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Popular</h2>
                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">60</span>
                                        <span class="cd-duration">mo</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>20 Keyword</li>
                                        <li><em><i class="fa fa-remove"></i></em>No Time Tracking</li>
                                        <li><em><i class="fa fa-remove"></i></em>230 - Man Hour</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>Popular</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">630</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>20 Keyword</li>
                                        <li><em><i class="fa fa-remove"></i></em>No Time Tracking</li>
                                        <li><em><i class="fa fa-remove"></i></em>230 - Man Hour</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li>
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>Premier</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">90</span>
                                        <span class="cd-duration">mo</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>20 Keyword</li>
                                        <li><em><i class="fa fa-remove"></i></em>No Time Tracking</li>
                                        <li><em><i class="fa fa-remove"></i></em>230 - Man Hour</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>Premier</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">950</span>
                                        <span class="cd-duration">yr</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>20 Keyword</li>
                                        <li><em><i class="fa fa-remove"></i></em>No Time Tracking</li>
                                        <li><em><i class="fa fa-remove"></i></em>230 - Man Hour</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>News Letter Available</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Purchase</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>
                </ul> <!-- .cd-pricing-list -->
            </div> <!-- .cd-pricing-container -->

        </section>

        <!-- Sections -->
        <section id="business" class="portfolio sections">
            <div class="container">
                <div class="head_title text-center">
                    <h1>Nuestras Soluciones y Especialidades </h1>
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                </div>

                <div class="row">
                    <div class="portfolio-wrapper text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-book"></i>
                                <div class="separator"></div>
                                <h4>Community Edition</h4>
                                <p>Visually explore your data through a free-form drag-and-drop canvas, a broad range of modern data visualizations, and an easy-to-use report authoring experience.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-bug"></i>
                                <div class="separator"></div>
                                <h4>Community Edition</h4>
                                <p>Visually explore your data through a free-form drag-and-drop canvas, a broad range of modern data visualizations, and an easy-to-use report authoring experience.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-gears"></i>
                                <div class="separator"></div>
                                <h4>Community Edition</h4>
                                <p>Visually explore your data through a free-form drag-and-drop canvas, a broad range of modern data visualizations, and an easy-to-use report authoring experience.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-external-link"></i>
                                <div class="separator"></div>
                                <h4>Community Edition</h4>
                                <p>Visually explore your data through a free-form drag-and-drop canvas, a broad range of modern data visualizations, and an easy-to-use report authoring experience.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Example row of columns -->
                <div class="row">
                    <div class="portfolio-wrapper2 text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-coffee"></i>
                                <div class="separator"></div>
                                <h4>Community Edition</h4>
                                <p>Visually explore your data through a free-form drag-and-drop canvas, a broad range of modern data visualizations, and an easy-to-use report authoring experience.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-tree"></i>
                                <div class="separator"></div>
                                <h4>Community Edition</h4>
                                <p>Visually explore your data through a free-form drag-and-drop canvas, a broad range of modern data visualizations, and an easy-to-use report authoring experience.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-paper-plane-o"></i>
                                <div class="separator"></div>
                                <h4>Community Edition</h4>
                                <p>Visually explore your data through a free-form drag-and-drop canvas, a broad range of modern data visualizations, and an easy-to-use report authoring experience.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <i class="fa fa-folder-open"></i>
                                <div class="separator"></div>
                                <h4>Community Edition</h4>
                                <p>Visually explore your data through a free-form drag-and-drop canvas, a broad range of modern data visualizations, and an easy-to-use report authoring experience.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- /container -->
        </section>

{{--! Area de Contacto
 --}}
        @yield('contact')




        <section id="footer-menu" class="sections footer-menu">
            <div class="container">
                <div class="row">
                    <div class="footer-menu-wrapper">

                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Quick Links</h5>
                                    <ul>
                                        <li>POWER BI DESKTOP</li>
                                        <li>MOBILE</li>
                                        <li>SEE ALL DOWNLOADS</li>
                                        <li>POWER BI DESKTOP</li>
                                        <li>MOBILE</li>
                                        <li>SEE ALL DOWNLOADS</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Legal</h5>
                                    <ul>
                                        <li>PRIVACY & COOKIES</li>
                                        <li>TERMS OF USE</li>
                                        <li>TRADEMARKS</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Information</h5>
                                    <ul>
                                        <li>SUPPORT</li>
                                        <li>DEVELOPERS</li>
                                        <li>BLOG</li>
                                        <li>NEWSLETTER</li>
                                        <li>PYRAMID ANALYTICS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="menu-item">
                                <h5>Newsletter</h5>
                                <p>Insights await in your company's data. Bring them into focus with BlueLance.</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                    <input type="submit" class="form-control" value="Use It Free">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="assets/images/tuturno.jpeg" alt="logo" width="50px" />
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Copyright © 2025 Tuturno Wilson Yujra Quispe</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>


		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
