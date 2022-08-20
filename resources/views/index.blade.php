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
        <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset('img/logo.png') }}" alt="alternative" ></a>
        
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
                    <a class="nav-link page-scroll" href="#request">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('login')}}">Inicia Sesión </a>
                </li>

                <!-- End Navbar -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contacto</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
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


    <!-- Request -->
    <div id="request" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Aqui puedes registrarte </h2>
                        
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Visualizacion de productos</strong> </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Compra segura</strong> </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Reportes de compras</strong></div>
                            </li>
                         
                        </ul>
                        <form action="{{ route('registrar') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rname" name="nombre" required>
                                <label class="label-control" for="rname">Nombre Completo</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="remail" name="email" required>
                                <label class="label-control" for="remail">Correo</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="password" name="password" onkeyup="evaluar(this);" required>
                                <label class="label-control" for="rname">Contraseña</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <b id="nivel"></b>
                             <b id="error"></b>
                            <div class="from-group">
                                <input type="date" class="form-control-input" id="rname" name="fn" required>
                                
                                <div class="help-block with-errors"></div>
                            </div>
                            <br>
                            <div class="from-group">
                                <input type="hidden" class="form-control-input" id="rname" name="formadepago" required>
                                
                            </div>
                            <div class="from-group">
                                <input type="hidden" class="form-control-input" id="rname" name="foto" required>
                                
                            </div>
                            <div class="from-group">
                                <input type="hidden" class="form-control-input" id="rname" name="numerodecuenta" required>
                                
                            </div>
                            <div class="from-group">
                                <input type="hidden" class="form-control-input" id="rname" name="rfc" required>
                                
                            </div>

                            <div class="from-group">
                                <input type="hidden" class="form-control-input" id="tipo" name="tipo" value="usuario" required>
                                
                            </div>

                            
                            
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Terminos Aceptados" name="terminos" required>Acepto los terminos y condiciones <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div><br>

                            <div class="g-recaptcha" data-sitekey="6LdGFHshAAAAACN6yoQVhSBIZrZ2sWrblOtlPh6C"></div>
      <br/>

                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Registrar</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of request form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of request -->



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
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x instagram"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
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
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1583.3539633245775!2d-99.50692526516735!3d19.287949289581988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf5735250700f%3A0x5c64e6f6671d0f27!2stuburro.com!5e0!3m2!1ses-419!2smx!4v1660897194590!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Nombre</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Mensaje</label>
                            <div class="help-block with-errors"></div>
                        </div>
                       
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Enviar mensaje</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

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
    
    	
    <script type="text/javascript">
                function evaluar(obj){
                    var pass = obj.value;               //Recibe variable de input
                    var conteo = obj.value.length;      //Cuenta la cadena string|Conraseña
                    var cadena = pass.split("");        //Divide la cadena String|Contraseña
                    var cont = 0;                       //Cuenta los caracteres especiales
                    var let_a = 0;                      //Cuenta las letras minusculas
                    var let_b = 0;                      //Cuenta las letras mayusculas
                    var let_c = 0;                      //Cuenta n     los numeros
                    var let_d = 0;                        //Caracter
                    if(conteo > 3){
                            if(cadena[0].search(/[A-Z]/g)+1 > 0){
                                let_a = 0;
                                let_b = 0;
                                let_c = 0;
                                let_d = 0;
                                cont = 0;

                                 //-------------------Evaluar: caracter x caracter
                                 for(var i=0; i < cadena.length; i++){
                                     var letra = cadena[i];
                                     if(letra.search(/[a-z]/g)+1 > 0){ let_a = let_a+1; }
                                     else{
                                            if(letra.search(/[A-Z]/g)+1 > 0){ let_b = let_b+1;}
                                            else{
                                                    if(letra.search(/[0-9]/g)+1 > 0){let_c = let_c+1;}
                                                    else{
                                                        if(letra.search(/[%&#$]/g)+1 > 0){let_d = let_d+1; }
                                                        else{ cont = cont+1; }
                                                    }
                                            }
                                     }
                                 }
                                 //------------------Evaluar: Canitdad de caracteres

                                 if(conteo >=8){
                                    document.getElementById("nivel").style.cssText = 'color: #000; background-color: #0D8E1A;';
                                    document.getElementById("nivel").innerHTML = "Segura";
                                 }else{
                                        if(conteo >=6 ){
                                            document.getElementById("nivel").style.cssText = 'color: #000; background-color: #EFDD0F;';
                                            document.getElementById("nivel").innerHTML = "Pocosegura";
                                        }
                                        else{
                                            document.getElementById("nivel").style.cssText = 'color: #000; background-color: #F00; ';
                                            document.getElementById("nivel").innerHTML = "Insegura";
                                        }
                                 }
                                 
                                 //-------------------Indicar Errores: Si existen letras y numeros
                                 if(let_a < 1 || let_b < 1 || let_c < 1 || let_d < 1){
                                     if(let_a < 1){let_a = "una letra minuscula"; }else{ let_a = " ";}
                                     if(let_b < 1){let_b = "una letra mayuscula"; }else{ let_b = " ";}
                                     if(let_c < 1){let_c = "un numero"; }else{ let_c = " ";}
                                     if(let_d < 1){let_d = "un caracter = (%&#$)"; }else{ let_d = " ";}
                                     document.getElementById("error").innerHTML = "Error: la contraseña debe de contener al menos " + let_a + " " + let_b + " " + let_c  + " " + let_d; 
                                 }else{
                                     document.getElementById("error").innerHTML = " ";
                                 }
                                 // ---------------------- Indica Errores: Si existen caracteres especiales
                                 if(cont > 0){
                                    
                                    document.getElementById("password").style.cssText = 'color: #F00; border: solid 1 px #F00';
                                    document.getElementById("nivel").innerHTML = " ";
                                 }
                                 else{
                                     document.getElementById("password").style.cssText = 'color: #000; border: solid 1px #000';
                                 }
                            }
                            else{ 
                                document.getElementById("password").style.cssText = 'color: #F00; border: solid 1px #F00';
                                document.getElementById("nivel").style.cssText = 'border-style: none;';
                                document.getElementById("nivel").innerHTML = " ";
                                document.getElementById("error").innerHTML = "Error: El primer caracter debe ser una letra mayuscula";
                            }
                    }
                    else{
                        document.getElementById("password").style.cssText = 'color: #000; border: solid 1px #000';
                        document.getElementById("nivel1").innerHTML = " ";
                        document.getElementById("error").innerHTML = " ";
                    }
                }

               
                
            </script>
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