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
        session_name();
        session_start();

        $_SESSION["id"];

        if (empty($_SESSION)) { // Recuerda usar corchetes.
        header('Location: index.blade.php');
        } // Recuerda usar corchetes
        ?>
    </head>
    <body>
        <!-- header-section-starts -->
        <div class="full">
            <div class="menu">
                <ul>
                    <li><a class="active" href="index.blade.php"><i class="home"></i></a></li>
                   

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

                                <a href="ingreso.blade.php"><span class="glyphicon glyphicon-user"></span> Iniciar Sesion</a>

                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="main-contact">
                        <h3 class="head">DATOS DE INGRESO</h3>
                        <p>Favor Ingresar Sus Datos</p>
                        <div class="contact-form">
                            <form method="POST">


                            </form>
                        </div>

                    </div>
                </div>
                <div class="footer">
                    <h6>Derechos : </h6>
                    <p class="claim">Cualquier Informacion o inquietud favor contactar al siguiente correo.</p>
                    <a href="example@mail.com">example@mail.com</a>

                </div>	
            </div>
            <div class="clearfix"></div>
        </div>



    </body>
</html>


