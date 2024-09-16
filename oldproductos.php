<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>GRAND PRIX | LUBRICENTO - Productos</title>
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
 	
   <?php
    include 'cabecera.php';
    ?>
    
    <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(images/background/page-banner-1.jpg);">
         <div class="auto-container">
            <div class="page-title"><h1>NUESTROS PRODUCTOS</h1></div>
            <div class="bread-crumb text-right">
                <span class="initial-text">Usted está aquí: </span>
                <span class="current">Nuestros Productos</span>
            </div>
        </div>
	</section>

	<!--nuestros productos-->
   <?php
        include 'nuestros-productos.php';
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
