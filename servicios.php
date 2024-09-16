<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>GRAND PRIX | LUBRICENTRO - SERVICIOS</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
   <!-- Main Header -->
    <header class="main-header">
        <div class="header-top">
        
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Logo-->
                    <div class="col-md-3 col-sm-3 col-xs-12 logo"><a href="index.html"><img src="images/logo.png" alt="Carshire" title="Carshire"></a></div>
                    
                    <div class="col-lg-5 col-md-6 col-sm-10 header-top-infos pull-right">
                        <ul class="clearfix">
                            <li>
                                <div class="clearfix ">
                                    <img src="images/icons/header-phone.png" alt="">
                                    <p><b>Llámenos ahora</b> <br>+549 11 5151 6560</p>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix ">
                                    <img src="images/icons/header-timer.png" alt="">
                                    <p><b>Nuestros Horarios</b> <br>Lun - Vie 8 a 13 y<br/> 14.30 a 17 hs<br>Sab 8 a 13</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Main Menu-->
                    <nav class="col-md-9 col-sm-12 col-xs-12 main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">                                                                                              
                            <ul class="navigation">
                                <li><a href="index.php">Home</a></li>

                                <li><a href="productos.php">Productos</a></li>
                                
                                <li class="current"><a href="servicios.php">Servicios</a></li>

                                <li><a href="quienessomos.php">Quienes Somos</a></li>
                                
                                <li><a href="contacto.php">Contacto</a></li>

                            </ul>
                        </div>
                    </nav>
                    <!--Main Menu End-->
                    
                    <!--Social Links-->
                    <div class="col-md-3 col-sm-12 col-xs-12 social-outer">
                        <div class="social-links text-right">
                            <a href="https://www.facebook.com/LubricentroGrandPrixBallester/" class="fa fa-facebook-f" target="_blank"></a>
                            <!-- <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-pinterest-p"></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->
    
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(images/background/page-banner-1.jpg);">
         <div class="auto-container">
            <div class="page-title"><h1>NUESTROS SERVICIOS</h1></div>
            <div class="bread-crumb text-right">
                <span class="initial-text">Usted está aquí: </span>
                <a href="#">Nuestros Servicios</a>
            </div>
        </div>
	</section>

	<!--Services Section-->
    <section class="services-section">
    	<div class="auto-container">
        
        	<div class="sec-title">
            	<h3>NUESTROS SERVICIOS</h3>
            </div>
            
            <div class="row clearfix">
            
            	<article class="col-md-4 col-sm-12 col-xs-12 post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="inner">
                        <div class="icon"><span class="flaticon-oiler"></span></div>
                        
                        <h3 class="post-title">Cambio de Aceite</h3>
                        
                	</div>
                </article>

                <article class="col-md-4 col-sm-12 col-xs-12 post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="icon"><span class="flaticon-power19"></span></div>
                        
                        <h3 class="post-title">Cambio de Batería</h3>
                        
                    </div>
                </article>

                <article class="col-md-4 col-sm-12 col-xs-12 post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="icon"><span class="flaticon-wrenches8"></span></div>
                        
                        <h3 class="post-title">Cambio de Filtro de Aire</h3>
                        
                    </div>
                </article>


                
            </div>
        </div>
    </section>
    
    <!--Galeria-->
   <?php
        include 'galeria.php';
    ?>
    
    
    
    
    <!--Sponsors-->
   <?php
        include 'sponsor.php';
    ?>


    
    
    <!--Contact Options-->
    <section class="contact-options">
        <div class="clearfix">
            <ul class="info-box clearfix wow bounceInRight">
                <li><a href="#"><span class="fa fa-calendar"></span> Solicitar turno</a></li>
                <li><a href="#"><span class="fa fa-phone"></span> Llámenos</a> </li>
            </ul>
        </div>
    </section>
    
   <?php
        include 'pie.php';
    ?>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>
