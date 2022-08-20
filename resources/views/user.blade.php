<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Grow Ferreteria</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Grow</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="{{ url('/user')}}"><img src="{{ asset('img/logo.png') }}" alt="alternative" ></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Inicio <span class="sr-only">(current)</span></a>
                </li>
                
                
                
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ url('/')}}">Salir </a>
                </li>

                <!-- End Navbar -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contacto</a>
                </li>
            </ul>
          
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="red">La mejores Herramientas</span> en un solo lugar</h1>
                            <p class="p-large">Encontra todo para la remodelacion de tu hogare     <a class="btn-solid-lg page-scroll" href="#services">Conocer más </a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('img/f3.jpg') }}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Algunos de Nuestras Marcas Disponibles</h5>
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{ asset('img/m1.png') }}" width="100" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{ asset('img/m2.jpg') }}"  width="100" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{ asset('img/m3.jpg') }}" width="100" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{ asset('img/m4.png') }}" width="100" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{ asset('img/m5.png') }}" width="100" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{ asset('img/m6.png') }}" width="100" alt="alternative">
                                    </div>
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Los mejores Productos</h2>
                     </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="{{ asset('img/e1.jpg') }}" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Refacciones y accesorios</h4>
                            <p>Contamos con un extenso surtido de refacciones y accesorios para complementar y alargar la vida útil de los productos.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="{{ asset('img/e2.jpg') }}" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Centros de servicio</h4>
                            <p>Ponemos a tu disposición nuestros Centros de Servicio Autorizado Truper, en México y Latinoamérica, donde repararemos tus herramientas eléctricas y a gasolina.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="{{ asset('img/e3.jpg') }}" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Manuales e instructivos</h4>
                            <p>Conoce cómo empezar a utilizar tus herramientas eléctricas, neumáticas, a gasolina, gatos hidráulicos, polipastos y más.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Visión</h2>
                        <p>Mantenernos como el proveedor más importante y relevante del mercado ferretero en México y América Latina, asegurando la estabilidad de la empresa en el largo plazo a través de un crecimiento y rentabilidad congruentes con el entorno, promoviendo así, el desarrollo de nuestros colaboradores y de México.</p>
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('img/f2.jpg') }}" width="600" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    
    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('img/f4.jpg') }}" width="600" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Misión</h2>
                        <ul class="list-unstyled li-space-lg">
                        <p>Mantenernos como el proveedor más importante y relevante del mercado ferretero en México y América Latina, asegurando la estabilidad de la empresa en el largo plazo a través de un crecimiento y rentabilidad congruentes con el entorno, promoviendo así, el desarrollo de nuestros colaboradores y de México.</p>
                        
                            
                           
                        </ul>
                      
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->



    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Acerca del equipo</h2>
                    <p class="p-heading p-large">Un trabajo Terminado en una semana para el ING.René.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                   

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{ asset('images/team-member-2.svg') }}" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Rudy Samuel Rios Hernandez</strong></p>
                        <p class="job-title">Desarrollador Web</p>
                        
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                   

                    

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i>22 Innovative Area, San Francisco, CA 94043, US</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+81 720 2212</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@Grow.com">office@Grow.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1583.3539633245775!2d-99.50692526516735!3d19.287949289581988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf5735250700f%3A0x5c64e6f6671d0f27!2stuburro.com!5e0!3m2!1ses-419!2smx!4v1660897194590!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                  

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
  
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>
</html>