<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CUALQUIER ENLACE ADICIONAL A ESTOS 4 SE DEBE INTRODUCIR DESPUES-->

    <!-- TITULO DE LA PESTAÑA  -->
    <title>This4thaT | Home</title>

    <!-- AQUÍ VA EL LOGO DEL MVP EN PEQUEÑO  -->
    <link rel="icon" href="../public/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/core-style.css">
    

    <!-- Responsive CSS -->
    <link href="../public/css/responsive.css" rel="stylesheet">

</head>

<body>
    <div class="catagories-side-menu">
        <!-- ICONO P/ CERRAR ESQUINA SUPERIOR DERECHA DE LA LISTA DESPLEGABLE IZQ. -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--ESTAS SON LAS BARRAS DE CATEGORIAS (LATERALES Y DESPLEGABLES)  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                <h6>CATEGORIAS </h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!--CATEGORIA DE PRODUCTOS PARA DESGLOSAR -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="#">PRODUCTOS <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="women">
                            <li><a href="#">EJEMPLO1</a></li>
                            <li><a href="#">EJEMPLO2</a></li>
                            <li><a href="#">EJEMPLO3</a></li>
                            <li><a href="#">EJEMPLO4</a></li>
                            <li><a href="#">EJEMPLO5</a></li>
                        </ul>
                    </li>
                    <!-- CATEGORIA DE SERVICIOS PARA DESGLOSAR -->
                    <li data-toggle="collapse" data-target="#man" class="collapsed">
                        <a href="#">SERVICIOS <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="man">
                            <li><a href="#">EJEMPLO1</a></li>
                            <li><a href="#">EJEMPLO2</a></li>
                            <li><a href="#">EJEMPLO3</a></li>
                        </ul>
                    </li>
                    <!-- CATEGORIA DE RECICLA PARA DESGLOSAR QUE PRODUCTOS SE ACEPTARAN -->
                    <li data-toggle="collapse" data-target="#kids" class="collapsed">
                        <a href="#">RECICLA <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="kids">
                            <li><a href="#">VIDRIO</a></li>
                            <li><a href="#">BATERIAS</a></li>
                            <li><a href="#">CARTON</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wrapper">

        <!-- ****** COMIENZA EL HEADER ****** -->
        <header class="header_area">
            <!-- AQUI VAN EL LOGO Y SLOGAN -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">
                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- AQUÍ VA EL LOGO DEL PRODUCTO -->
                                <div class="top_logo">
                                    <a href="#"><img src="../public/img/core-img/logo.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--PARTE FINAL DEL HEADER -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!--AQUI VAN LOS ENLACES A LAS REDES SOCIALES-->
                            <div class="header-social-area">
                                <a href="#"><span class="karl-level">COMPARTIR</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <!-- AREA MENÚ -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                            <li class="nav-item dropdown">
                                                <!--¿ESTO SE QUITA O NO? MENÚ EN DONDE SE DESPLEGARÁ TODA LA INFORMACIÓN LEGAL, DE PEDIDO, CARRITO-->
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MÁS INFO</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="index.html">PERFILES</a>
                                                    <a class="dropdown-item" href="shop.html">TÉRMINOS Y CONDICIONES</a>
                                                    <a class="dropdown-item" href="product-details.html">AVISO DE PRIVACIDAD</a>
                                                    <a class="dropdown-item" href="publicacion.php">TRUEQUE</a>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="publicacion.php">Trueque</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><span class="karl-level">IMPORTANTE</span> DENUNCIA</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">CONTACTO</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!--AQUI ESTA EL NUMERO DE CONTACTO O DENUNCIA O INFO O NO SÉ -->
                            <div class="help-line">
                                <a href="tel:+346573556778"><i class="ti-headphone-alt"></i> +01800-This-4-That</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** TERMINA HEADER ****** -->

        <!-- ****** COMIENZA ÁREA DE CONVENIO P/DESCUENTOS TIP: LOGISTICA ****** -->
        <section class="top-discount-area d-md-flex align-items-center">
            <!-- 1) Single Discount Area -->
            <div class="single-discount-area">
                <h5>Rappi -20% en tu primera entrega</h5>
                <h6><a href="#">USA ESTE CÓDIGO: FH#877</a></h6>
            </div>
            <!-- 2) Single Discount Area -->
            <div class="single-discount-area">
                <h5>iVoy -20% en traslado de reciclables</h5>
                <h6>USA ESTE CÓDIGO: ECO#8798J</h6>
            </div>
            <!-- 3) Single Discount Area -->
            <div class="single-discount-area">
                <h5>10% en bonificación tarjeta</h5>
                <h6>USA EL CÓDIGO: POINTS#T4T</h6>
            </div>
        </section>
        <!-- ****** TERMINA ÁREA DE CONVENIOS ****** -->

        <!-- ****** COMIENZA CARRUSEL/SLIDES CON IMAGENES QUE ATRAIGAN AL USUARIO PARA QUE IDENTIFIQUE LAS CATEGORIAS ****** -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- AQUÍ IMAGEN DEL PRIMER SLIDE "¡INTERCAMBIA/TRUEQUEA PRODUCTOS!" -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(../public/img/bg-img/bg-1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <!--SLIDE PRODUCTOS-->
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Sólo HOY envío GRATIS</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">PRODUCTOS</h2>
                                    <a href="publicacion.php" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">COMIENZA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AQUÍ IMAGEN DEL PRIMER SLIDE "¡INTERCAMBIA/TRUEQUEA SERVICIOS!" -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(../public/img/bg-img/bg-4.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Sólo HOY envío GRATIS</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">SERVICIOS</h2>
                                    <a href="publicacion.php" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">COMIENZA</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

                <!-- AQUÍ IMAGEN DEL PRIMER SLIDE "¡RECICLA, VENDE O TRASLADA!" -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(../public/img/bg-img/bg-2.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Sólo HOY doble puntos por TRASLADO</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">¡RECICLA, VENDE O TRASLADA!</h2>
                                    <a href="publicacion.php" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">COORDINA PESAJE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****** TERMINA CARRUSEL/SLIDES****** -->

         <!-- ****** Categorias generales ****** -->
         <section class="top_catagory_area d-md-flex clearfix">
            <!-- productos -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(../public/img/bg-img/bg-3.jpg);">
                <div class="catagory-content">
                    <h6>TRUEQUE DE</h6>
                    <h2>PRODUCTOS</h2>
                    <a href="#" class="btn karl-btn">VER</a>
                </div>
            </div>
            <!-- servicios -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(../public/img/bg-img/bg-6.jpg);">
                <div class="catagory-content">
                    <h6>TRUEQUE DE</h6>
                    <h2>SERVICIOS</h2>
                    <a href="#" class="btn karl-btn">VER</a>
                </div>
            </div>
        </section>
        <!-- ****** termina categorias generales ****** -->

        <!-- ****** RECIENTES ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>RECIENTES</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="karl-projects-menu mb-100">
                <div class="text-center portfolio-menu">
                    <button class="btn active" data-filter="*">TODOS</button>
                    <button class="btn" data-filter=".women">#MUEBLES</button>
                    <button class="btn" data-filter=".man">#LGBTTT</button>
                    <button class="btn" data-filter=".access">#ASESORIAS</button>
                    <button class="btn" data-filter=".shoes">#COMIDA</button>
                    <button class="btn" data-filter=".kids">#ROPA</button>
                </div>
            </div>

            <div class="container">
                <div class="row karl-new-arrivals">

                    <!-- 1) COMIENZA GALERIA VISUAL DE "RECIENTES" -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- AQUÍ IMAGEN REPRESENTATIVA DE #MUEBLES -->
                        <div class="product-img">
                            <img src="../public/img/product-img/product-1.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!--INFO DE IMAGEN #MUEBLES -->
                        <div class="product-description">
                            <h4 class="product-price">Ofrezco mochila nueva</h4>
                            <p>Busco libros de filosofía</p>
                            <!--DETERMINAR SI EL DESARROLLO PERMITE EL CARRITO -->
                            <a href="#" class="add-to-cart-btn">INTERCAMBIA/TRUEQUEA</a>
                        </div>
                    </div>

                    <!-- 2) -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.3s">
                        <!--AQUÍ IMAGEN REPRESENTATIVA DE #ASESORIAS-->
                        <div class="product-img">
                            <img src="../public/img/product-img/product-2.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!--INFO DE IMAGEN #ASESORÍAS -->
                        <div class="product-description">
                            <h4 class="product-price">Ofrezco bicicleta</h4>
                            <p>Busco clases de inglés </p>
                            <!--DETERMINAR SI EL DESARROLLO PERMITE EL CARRITO -->
                            <a href="#" class="add-to-cart-btn">INTERCAMBIA/TRUEQUEA</a>
                        </div>
                    </div>

                    <!-- 3) -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item access wow fadeInUpBig" data-wow-delay="0.4s">
                        <!--AQUÍ IMAGEN REPRESENTATIVA DE #ROPA-->
                        <div class="product-img">
                            <img src="../public/img/product-img/product-3.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">Ofrezco silla seminueva</h4>
                            <p>Busco comida corrida a domicilio</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">INTERCAMBIA/TRUEQUEA</a>
                        </div>
                    </div>

                    <!-- 4) -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item shoes wow fadeInUpBig" data-wow-delay="0.5s">
                        <!--AQUÍ IMAGEN REPRESENTATIVA DE #SERVICIOS-->
                        <div class="product-img">
                            <img src="../public/img/product-img/product-4.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">Ofrezco pasear perros</h4>
                            <p>DESPENSA BÁSICA (3 KG)</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">INTERCAMBIA/TRUEQUEA</a>
                        </div>
                    </div>

                    <!--5) -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.6s">
                        <!--AQUÍ IMAGEN REPRESENTATIVA DE #PSICOLOGO-->
                        <div class="product-img">
                            <img src="../public/img/product-img/product-5.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">TERAPIA CONDUCTUAL(3 HRS)</h4>
                            <p> REQUIERO SERVICIO DENTAL (1 RESINA)</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">INTERCAMBIA/TRUEQUEA</a>
                        </div>
                    </div>

                    <!-- Single gallery Item -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item kids man wow fadeInUpBig" data-wow-delay="0.7s">
                        <!-- AQUI IMAGEN REPRESENTATIVA #ESTÉTICA-->
                        <div class="product-img">
                            <img src="../public/img/product-img/product-6.jpg" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="product-price">OFREZCO SERVICIO DE DISEÑADORA UX</h4>
                            <p>REQUIERO UTENSILIOS DE COCINA</p>
                            <!-- Add to Cart -->
                            <a href="#" class="add-to-cart-btn">INTERCAMBIA/TRUEQUEA</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ******  ****** -->

        <!-- ****** Popular Brands Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>TESTIMONIOS</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Intercambie servicio por producto, el servicio fue rapido y facil, sin duda lo recomendaré. </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="../public/img/bg-img/tes-1.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Yocelin Garcia</p>
                                        <span>Usuaria, CDMX</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>¡Justo lo que buscaba! Ya puedo comer despues de la universidad</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="../public/img/bg-img/tes-2.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Adriana Mora</p>
                                        <span>Usuaria, CDMX</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>Esta super bien diseñada y el código es hermoso, quien haya programado este sitio merece un premio </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="../public/img/bg-img/tes-3.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Brenda Sanchez</p>
                                        <span>Usuaria, CDMX</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ****** Popular Brands Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="../public/img/core-img/logo.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Our Policies</a></li>
                                <li><a href="#">Afiliates</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribe to our newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input type="email" name="mail" class="mail" placeholder="Your email here">
                                    <button type="submit" class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="../public/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../public/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../public/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../public/js/plugins.js"></script>
    <!-- Active js -->
    <script src="../public/js/active.js"></script>

</body>

</html>