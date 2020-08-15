<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="Img/Logo.ico" />
    <meta name="Description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Estilos-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!--Estilos-->
</head>

<body>
    <!--Empieza el header-->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img img-">
                                <a href="{{url('/')}}">
                                    <img src="Img/Logo.png" class="img-fluid" alt="Logotipo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block text-center">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{url('/')}}">Incio</a></li>
                                        <li><a href="{{url('/galeria/')}}">Productos</a></li>
                                        <li><a href="{{url('/gaming/')}}">Gaming</a></li>
                                        <li><a href="{{url('/contacto/')}}">Contacto</a></li>
                                                <li><a href="{{url('/admin/')}}">Admin</a></li>
                                        <li><a href="{{url('/login/')}}">Iniciar Sesión</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-end">
                                <a href="{{url('/perfil/')}}" class="say_hi">Nombre Usuario</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Termina el header-->

    <!--Area de slider-->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-lg-10 col-md-10">
                        <div class="slider_text">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                Todo lo que ocupas
                                para ser el mejor jugador
                                lo encontraras aqui.
                            </h3>
                            <a class="boxed-btn3 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".2s" href="{{url('/galeria/')}}">Productos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Area de slider-->

    <!--Productos Area-->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" >Productos</span>
                        <h3 class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">Su mejor opción en el mercado
                            los mejores muebles
                            a los mejores precios.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="Img/producto2.jpg"class="img-fluid" alt="Producto 1">
                        </div>
                        <h3>Mueble Baño</h3>
                        <br>
                        <a class="boxed-btn3 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".2s" href="{{url('/galeria/')}}">Ver más </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="icon">
                            <img src="Img/producto2.jpg" class="img-fluid" alt="Producto 2">
                        </div>
                        <h3>Mueble Cocina</h3>
                        <br>
                        <a class="boxed-btn3 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".2s" href="{{url('/galeria/')}}">Ver más </a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="icon">
                            <img src="Img/producto2.jpg" class="img-fluid" alt="Producto 3">
                        </div>
                        <h3>Mueble Habitacion</h3>
                        <br>
                        <a class="boxed-btn3 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".2s" href="{{url('/galeria/')}}">Ver más </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Productos Area-->

    <!--Pie de pagina-->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3">
                        <div class="footer_logo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                            <a href="index.html">
                                <img src="Img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="menu_links">
                            <ul>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" href="Index.html">Inicio</a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" href="Productos.html">Productos</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s" href="gaming.html">Gaming</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".8s" href="Contacto.html">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="socail_links">
                            <ul>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Pie de pagina-->



    <!--Js-->
    <script src="Js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="Js/vendor/jquery-1.12.4.min.js"></script>
    <script src="Js/popper.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    <script src="Js/owl.carousel.min.js"></script>
    <script src="Js/isotope.pkgd.min.js"></script>
    <script src="Js/ajax-form.js"></script>
    <script src="Js/waypoints.min.js"></script>
    <script src="Js/jquery.counterup.min.js"></script>
    <script src="Js/imagesloaded.pkgd.min.js"></script>
    <script src="Js/scrollIt.js"></script>
    <script src="Js/jquery.scrollUp.min.js"></script>
    <script src="Js/wow.min.js"></script>
    <script src="Js/nice-select.min.js"></script>
    <script src="Js/jquery.slicknav.min.js"></script>
    <script src="Js/jquery.magnific-popup.min.js"></script>
    <script src="Js/plugins.js"></script>
    <script src="Js/gijgo.min.js"></script>
    <script src="js/main.js"></script>
    <!--Js-->
</body>
</html>
