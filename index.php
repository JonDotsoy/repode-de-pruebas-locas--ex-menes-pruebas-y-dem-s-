<!DOCTYPE html>
<html>

<head>
    <title>CAFETERIA</title>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="coffee.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Elastic Image Slideshow with Thumbnail Preview" />
        <meta name="keywords" content="jquery, css3, responsive, image, slider, slideshow, thumbnails, preview, elastic" />
        <meta name="author" content="Codrops" />

        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
		<noscript>
		<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>

    <link rel="stylesheet" href="nivo/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/css/nivo-slider.css" type="text/css" media="screen" />
    <style>
        .slider-wrapper{
            padding: 500px;
            width: 960px;
            margin: 100px auto;

            
        }
    </style>

</head>

<body>

	       <div class="container">
            
            <div class="header">
              
                <span class="right">
                    <a href="login.php">Ingresar</a>
                    <a href="registrar.php">Registrar</a>
                    <a href="carrito.php">Admin</a>

                </span>
                <div class="clr"></div>
            </div>
           
      
        </div>


        <div id="menu">
            <ul id="men">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="consultapdf.php">PDF</a></li>
             
            </ul>

        </div>

       <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					easing		: 'easeOutExpo',
					titleeasing	: 'easeOutExpo',
					titlespeed	: 1200
                });
            });
        </script>
        -->

         <!-- Aqui irá el slider -->

        <div class="slider-wrapper theme-light">
        <div id="slider" class="nivoSlider">
            <img src="nivo/img/ck12.jpg" title="<p>Cupcakes</p>" />
            <img src="nivo/img/ck13.jpg" title="<p>Cupcakes</p>" />
            <img src="nivo/img/ck14.jpg" />
            <img src="nivo/img/ck15.jpg" />
        </div>
        <div id="caption1" style="display: none;">
            <h3>Hola, esto es un caption HTML</h3>
          
        </div>
    </div>
    <script src="nivo/js/jquery.min.js" type="text/javascript"></script>
    <script src="nivo/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(window).load(function(){
        $('#slider').nivoSlider({
            effect: 'fade',
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: 500,
            pauseTime: 3000,
            startSlide: 0,
            directionNav: true,
            controlNav: true,
            controlNavThumbs: false,
            pauseOnHover: true,
            manualAdvance: false,
            prevText: 'Prev',
            nextText: 'Next',
            randomStart: false,
        });
    });

    </script>
</body>
</html>