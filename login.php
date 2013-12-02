<!DOCTYPE html>
<html>
<head>
    <title>CAFETERIA</title>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="coffee.ico" />
    <link rel="shortcut icon" href="image/now.ico" />
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
</head>
<body>
    <div class="container">
        <div class="header">      
            <span class="right">
                <a href="">Ingresar</a>
                <a href="registrar.php"><strong>Registrar</strong></a>
                <!--Modulo de unlogin, Permite mostrar el usuario si se esta logeado  -->
                <?php include "moduleunlogin.php"; ?>
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

    </ul>

    </div>

    <div>
    <form>

    </form>
    </div>
    <br>

    <?php
        include "mantenedor.php";

        if (isset($_POST["login"])) {
            if (login($_POST["user"],$_POST["password"])) {
                # $_SESSION['userid']
                setcookie('userid',$_POST["user"]);
                echo '<div class="success">Su usuario es correcto.</div>';
            } else {
                echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
            }
        }
    ?>  

        <form action="" method="post" class="login"> 

        <div><label>User</label><input name="user" type="text" ></div> 
        <div><label>Pass</label><input name="password" type="password"></div> 
        <div><input name="login" type="submit" value="login" ></div> 

        </form>
</body>
</html>