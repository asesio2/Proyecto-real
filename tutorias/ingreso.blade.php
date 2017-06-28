<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cinema A Entertainment Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <script src="js/jquery.min.js"></script>
        <script src="js/validator.js"></script>
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <?php
        session_start(); // al volver al index si existe una session, esta sera destruida, existen formas de conservarlas como con un if(session_start()!= NULL). Pero por el momento para el ejemplo no es valido. 
        session_destroy();  // Se destruye la session existente de esta forma no permite el duplicado.
        ?>
    </head>
    <body>
        <!-- header-section-starts -->
        <div class="full">
            <div class="menu">
                <ul>
                    <li><a href="index.blade.php"><div class="hm"><i class="home1" style="color: white">Inicio</i><i class="home2"></i></div></a></li>
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
                    <div class="main-contact">
                        <h3 class="head">DATOS DE INGRESO</h3>
                        <p>Favor Ingresar Sus Datos</p>
                        <div class="contact-form">
                            <form method="POST" action="menuSecretaria.blade.php">
                                <div class="col-md-6 contact-left">
                                    <input type="text" placeholder="Rut" id="txtPass" name="txtPass" required/>
                                    <input type="text" placeholder="Contraseña"  id="txtPass" name="txtPass" required/>
                                </div>
                                  <div class="col-md-6 contact-right">
					
                                      <a href="menuSecretaria.blade.php"><input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" /></a>
                                      <img src="images/llave.gif">
                                      
				 </div>
				 <div class="clearfix"></div>  

                            </form>
                        </div>

                    </div>
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
            <div class="clearfix"></div>
        </div>



    </body>
</html>
