<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <title>Login</title>
</head>
<body>
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
    <title>Grow Agencia Digital</title>
    
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
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset('img/logo.png') }}" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Paquetes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#">Inicia Sesión </a>
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
                    <div id="request" class="form-1">
        
                    <h2>Inicio de sesion </h2>
                        
                     
                            <form action="login" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="email" name="email" required>
                                <label class="label-control" for="email">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="pass" name="password" required>
                                <label class="label-control" for="name">Contraseña</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            @error('messsage')
                            <p class="border border-red-500 rounded-md bg-red-100 w-full
                            text-red-600 p-2 my-2">* Error</p>
                            @enderror

                            <div class="g-recaptcha" data-sitekey="6LdGFHshAAAAACN6yoQVhSBIZrZ2sWrblOtlPh6C"></div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Iniciar Sesion</button>
                            </div>
                            
                        </form>
              

               
    </div> <!-- end of form-1 -->
    <!-- end of request -->

                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('img/f4.jpg') }}" width="500" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
        
           
    </nav> <!-- end of navbar -->
    
    
    <!-- Scripts -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
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
</body>
</html>
