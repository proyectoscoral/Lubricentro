<?php
$ruta='./PHPMailer/class.phpmailer.php' ; 
require($ruta);
$mail = new PHPMailer();

//$mail->IsSMTP(); // telling the class to use SMTP

//$mail->Host = "smtp.example.com"; // SMTP server
$mail->FromName="Grand Prix Lubricentro | Sitio Web";
$mail->From = "info@celentanomotors.com.ar";
//$mail->AddAddress("ccastro@coralweb.com.ar");


$mail->AddAddress("pgfossa@coralweb.com.ar");

$mail->WordWrap = 50;
$mail->Mailer = "smtp";  
$mail->Host = "localhost";  
$mail->Port = 25;  
$mail->SMTPAuth = true; // turn on SMTP authentication  
$mail->Username = "prueba@coraldemo.com.ar"; // SMTP username  
$mail->Password = "Coral1826"; // SMTP password 
$mail->Subject = "Formulario desde el Sitio de Grand Prix";  
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>GRAND PRIX | LUBRICENTRO - CONTACTO</title>
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
                                
                                <li><a href="servicios.php">Servicios</a></li>

                                <li><a href="quienessomos.php">Quienes Somos</a></li>
                                
                                <li class="current"><a href="contacto.php">Contacto</a></li>

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
            <div class="page-title"><h1>Contáctenos</h1></div>
            <div class="bread-crumb text-right">
                <span class="initial-text">Usted está aquí: </span>
                
                <span class="current">Contacto</span>
            </div>
        </div>
	</section>
    
    <!-- Sidebar Page -->
    <div class="sidebar-page">
    	<div class="auto-container">
            <div class="row clearfix">
                
                <!-- Left Content -->
                <section class="left-content col-lg-9 col-md-8 col-sm-7 col-xs-12">
                	
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                			
                        <div class="sec-title"><h3 class="skew-lines">Déjenos un mensaje</h3></div>
                        <div class="msg-text">Si usted desea puede ponerse en contacto con nosotros a través del siguiente formulario</div>
                        

                        <!--Contact Form-->
                        <?php
                        if (!$_POST){ 
                        ?>          
                        <form id="contact-form" method="post" action="contacto.php">
                            <div class="row clearfix">
                                
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" name="nombre" value="nombre" placeholder="Ingrese su nombre">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" value="email" placeholder="Ingrese su Email">
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Asunto</label>
                                        <input type="text" name="asunto" value="asunto" placeholder="Ingrese el asunto">
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    
                                    <div class="form-group">
                                        <label class="form-label">Mensaje</label>
                                        <textarea name="mensaje" placeholder="Escriba su sugerencia, pregunta o comentario"></textarea>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="form-group text-right">
                                <button type="submit" name="submit-form" class="theme-btn dark-btn hvr-bounce-to-right"><span class="fa fa-envelope"></span> Enviar mensaje</button>
                            </div>
                            
                        </form>

                        <?php
}else{ 

 //Estoy recibiendo el formulario, compongo el cuerpo 
    $cuerpo = "NOMBRE: " . $_POST["nombre"] . "\n"; 
    $cuerpo .= "EMAIL: " . $_POST["email"] . "\n"; 
    $cuerpo .= "ASUNTO: " . $_POST["asunto"] . "\n";  
  $cuerpo .= "CONSULTA: " . $_POST["mensaje"] . "\n";
  $cuerpo .= "\n \n Desarrollado por Estudio Coral S.R.L.";

  $remitente .= "From: " . $_POST["email"]; 

  /*switch ($_POST["destino"]){
    case 1: 
        $mail->AddAddress("ccastro@coralweb.com.ar");
        $mail->Subject = "Formulario desde el Sitio: COMERCIAL";  
        break;
  
    case 2: 
        $mail->AddAddress("ccastro@coralweb.com.ar");
        $mail->Subject = "Formulario desde el Sitio: ADMINISTRACION"; 
        break;
  
    case 3: 
        $mail->AddAddress("ccastro@coralweb.com.ar");
        $mail->Subject = "Formulario desde el Sitio: SOPORTE TECNICO";  
        break;
    
  }*/
  
  $mail->Body = $cuerpo;

  //echo $cuerpo;
  if(!$mail->Send())
  {
     echo 'El mensaje no pudo enviarse.';
     echo 'Error: ' . $mail->ErrorInfo;
  }

  else
  { ?>
   
    <p class="mensaje">Gracias por completar el formulario. A la brevedad nos comunicaremos con Ud.</p>
    
<?php
  }
  
}
?> 
                            
                	</div>
                    
                
            	</section>
                
                <!-- Side Bar -->
                <aside class="side-bar col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    
                    
                    
                    
                    <!-- Contact Info -->
                    <div class="widget cont-info">
                        <div class="sec-title"><h3 class="skew-lines">Información de la empresa</h3></div>
                        <div class="cont-box">
                            <div class="text">Si prefieres contactarte por los siguientes medios.</div>
                            <ul class="info">
                            	<li><strong>Email</strong> <a href="mailto:info@grandprixlubricentro.com.ar">info@grandprixlubricentro.com.ar</a></li>
                                <li><strong>Teléfono</strong> <a href="+5491151516560">+549 11 5151 6560</a></li>
                           
                                <li><strong>Facebook</strong> <a href="https://www.facebook.com/LubricentroGrandPrixBallester/">facebook/Lubricentro/</a></li>
                            </ul>
                        </div>
                        
                    </div>
                
                
                </aside>
            
            </div>
        </div>
        
    </div>
    
    
    <!--Map Location-->   
    <!-- <section class="map-location" id="map-location">
    
    </section> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.643764232818!2d-58.56579542952629!3d-34.562573990482186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb9e5a0769ac3%3A0x5aa779e719bf8b51!2sAv.+101+9+de+Julio+4607%2C+Villa+Ballester%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1528396199906" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    <?php
        include 'pie.php';
    ?>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/googlemaps.js"></script>
<script src="js/script.js"></script>
</body>
</html>