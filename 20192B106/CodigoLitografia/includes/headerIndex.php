<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Litografia Angarita</title>

    <!-- Normalizacion de la pagina -->
    <link rel="stylesheet" href="CodigoLitografia/css/normalize.css">

    <!-- hoja de estilo (colores) -->
    <!-- <link rel="stylesheet" href="/websito/css/main.css">--> 
    <link rel="stylesheet" href="CodigoLitografia/css/main.css">

    <!-- bootstrap (estilo de la pag) -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>
    <header>
        <!-- <h1>Angarita Ardila Impresiones</h1> -->
        <image src="https://drive.google.com/uc?export=view&id=1Ykr7OqeT8r1P1_y9Tp7h97Fg7VI0JhcD" width="100%" height="100%"></image>
        <div style="position:absolute; top:25px; left:140px; visibility:visible z-index:1">  
            <img src="https://drive.google.com/uc?export=view&id=1O1r4y4eMmUeTtBXrNZwuAdDPbZ3S3PEl" width="25%" height="150%">
            <div class="navigation" >
                <ul class="menu">
                    <!-- (li) pestañas que voy a ver-->
                    <li class="nav-item active">
                        <a class="nav-link" href="/20192B106/index.php">Inicio </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="CodigoLitografia/templates/proctyservicios.php">Productos y Servicios</a>
                            <ul class="submenu">
                                <li>
                                    <a href="CodigoLitografia/templates/comercial.php">Papeleria Comercial</a>
                                </li>
                                <li>
                                    <a href="CodigoLitografia/templates/miscelanea.php">Miscelanea</a>
                                </li>   
                            </ul>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="CodigoLitografia/templates/acerca_de.php">Nosotros </a>
                            <ul class="submenu">
                                <li>
                                    <a href="#empresa">Historia</a>
                                </li>
                                <li>
                                    <a href="#mision">Mision</a>
                                </li>
                                <li>
                                    <a href="#vision">Vision</a>
                                </li>
                                <li>
                                    <a href="#calidad">Calidad</a>
                                </li>   
                            </ul>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="CodigoLitografia/templates/promociones.php">Promociones</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="CodigoLitografia/templates/ubicacion.php">Ubicacion</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="CodigoLitografia/templates/contactenos.php">Contacto</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="CodigoLitografia/templates/preguntas.php">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php
            if(isset($_COOKIE['contador']))
            { 
                // cookie para tener un conteo de vistas
                setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
                $mensaje = 'Número de visitas: ' . $_COOKIE['contador']; 
            } 
            else 
            { 
                // Caduca en un año 
                setcookie('contador', 1, time() + 365 * 24 * 60 * 60); 
                $mensaje = 'Bienvenido a nuestra página web'; 
            } 
        ?> 
    </header>          
      
