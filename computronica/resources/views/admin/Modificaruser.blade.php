<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar usuario</title>
    <link rel="icon" type="image/png" href="../Img/Logo.ico" />
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
                                <a href="../index.html">
                                    <img src="../Img/logo.png" class="img-fluid" alt="Logotipo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block text-center">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Incio</a></li>
                                        <li><a href="{{url('/galeria/')}}">Productos</a></li>
                                      
                                        <li><a href="{{url('/contacto/')}}">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-end">
                                <a href="../perfil.html" class="say_hi">Bienvenido</a>
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

    <!--Breadcam Area-->
    <div class="bradcam_area breadcam_bg_6">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Actualizar Usuario</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcam Area-->
    <br>
    <!--Update Area-->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="card wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="card body">
                          <ul class="list cat-list">
                              <li class="active">
                                  <a href="{{url('/admin/')}}" class="d-flex">
                                      <p>Información Administrador</p>
                                  </a>
                              </li>
                              <br>
                              <li>
                                  <a href="{{url('/Subirproducto/')}}" class="d-flex ">
                                      <p></p>
                                  </a>
                              </li>
                              <br>
                              <li>
                                  <a href="{{url('/Modificaruser/')}}" class="d-flex ">
                                      <p>Modificar usuario</p>
                                  </a>
                              </li>
                              <br>
                              <li>
                                  <a href="{{url('/EliminarProducto/')}}" class="d-flex ">
                                      <p>Eliminar usuario</p>
                                  </a>
                              </li>
                              <br>
                              <li>
                                  <a href="#" class="d-flex">
                                      <p>Cerrar Sesión</p>
                                  </a>
                              </li>
                              <br>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-9">
                  <form method="post" class="formulario" action="{{('modificaruser')}}">
                        @csrf
                        @method('put')
                    <div class="card text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                        <div class="get_in_tauch_area">
                            <div class="container">
                                    <div class="touch_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                                        <p>Id del usuario.</p>
                                                        <input type="text" placeholder="Clave" name="_id" >
                                                    </div>
                                                </div>
                                            <div class="col-md-6">
                                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                                        <p>Nombre del usuario.</p>
                                                        <input type="name" placeholder="Nombre" name="name" >
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                                        <p>Email.</p>
                                                        <input type="" placeholder="Email"  name="email">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                                        <p>Contraseña</p>
                                                        <input type="" placeholder="Password"  name="password">
                                                    </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="submit_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                                        <a href="#" class="genric-btn danger radius">Cancelar</a>
                                                        <button type="submit" class="genric-btn success radius">Actualizar</button>
                                                </div>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Upadte Area-->
    <br>
    <!--Pie de pagina-->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3">
                        <div class="footer_logo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                            <a href="../index.html">
                                <img src="../Img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="menu_links">
                            <ul>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" href="../Index.html">Inicio</a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" href="../Productos.html">Productos</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s" href="../gaming.html">Gaming</a></li>
                                <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".8s" href="../Contacto.html">Contacto</a></li>
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
