<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Colegio</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        <style> 
                   h2 {font-family: Impact; color:#777777; 
                         margin:0; 
                         font-size: 35px; 
                         text-align:center; 
                         text-shadow: 1px 1px 3px #323232 ;} 
            </style> 
            <!-- header-section-starts -->
            <div class="full">
            <div class="menu">
                <ul>
                    <li><a class="active" href="index.blade.php"><i class="home" style="color: white">Inicio</i></a></li>
                    <li><a href="contacto.blade.php" ><div class="cnt"><i class="contact" style="color: white">Contacto</i><i class="contact1">Contacto</i></div></a></li>

                </ul>
            </div>
            <div class="main">
                <div class="header">
                    <div class="top-header">
                        <div class="logo">
                            <a href="index.blade.php"><img src="images/logoOficial.png" alt="" /></a>


                        </div>
                        <div class="search">

                            <form>

                                <a href="ingreso.blade.php"><img src="images/user.png" width="40px">Iniciar Sesion</a>

                            </form>


                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="header-info">
                        <h1>Quienes Somos</h1>

                        <h3><p style="color: whitesmoke">Somos un equipo conformados por dos esforzados estudiantes de la institucion Duoc Uc.
                                siendos guiados por el profesor francisco juliet. <br><br>
                                Nuestra mision consiste en implementar un buen sistema de organizacion de tutorias a nivel Educacional
                                velando por el correcto uso de estos. <br><br>
                            </p></h3>
                        <a href="http://www.duoc.cl/"><img src="images/duocuc1.png" width="400px"></a>
                    </div>
                </div>
            </div>
            <div class="review-slider">
                <ul id="flexiselDemo1">
                    <li><img src="images/cole1.jpg" alt=""/></li>
                    <li><img src="images/cole2.jpg" alt=""/></li>
                    <li><img src="images/cole3.jpg" alt=""/></li>
                    <li><img src="images/cole4.jpg" alt=""/></li>
                    <li><img src="images/cole5.jpg" alt=""/></li>
                    <li><img src="images/cole6.jpg" alt=""/></li>
                </ul>
                <script type="text/javascript">
                    $(window).load(function () {

                        $("#flexiselDemo1").flexisel({
                            visibleItems: 5,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: false,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 2
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 3
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });
                    });
                </script>
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>	
            </div>

            <div class="footer">
                <center>
                    <h3>Consultas : </h3>
                    <p class="claim">Cualquier Informacion o inquietud favor contactar al siguiente correo.</p>
                    <a href="example@mail.com">example@mail.com</a>
                    <div>
                        <a href="http://www.twitter.com/"><img style="width: 35px " src="images/twitter.jpg">Twitter</a>
                        <a href="http://www.instagram.com/"><img style="width: 38px" src="images/insta.png" >Instagram</a>
                        <a href="http://www.facebook.com/"><img style="width: 38px" src="images/face.png" >Facebook</a>
                    </div>
                </center>
            </div>	
        </div>
    </div>
    <div class="clearfix"></div>
</body>
</html>
