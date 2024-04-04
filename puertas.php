<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns#">

<head>
<?php require "head.php"; ?>
    <title>Puertas en Vidrio y Aluminio Chihuahua</title>
    <link rel="canonical" href="https://vidrioyaluminiolosdoscarnales.com/puertas.php" />
    <meta property="og:title" content="Puertas en Vidrio y Aluminio" />
    <meta property="og:url" content="https://vidrioyaluminiolosdoscarnales.com/" />
    <meta property="og:image" content="https://vidrioyaluminiolosdoscarnales.com/images/og/og-image.png" />
</head>

<body>

    <?php require "header.php"; ?>

    <div class="fondoprincipal">
        <div class="fondo_texto">
            <h1 class="principal_title">VIDRIO Y ALUMINIO</h1>
            <h2>"Puertas para tu Hogar o Negocio"</h2>
            <img id="img_fondo" src="./images/fondos/puertas/1.jpeg"
                alt="Puertas para tu Hogar o Negocio Chihuahua">
        </div>
        <div class="conteiner_imgprincipal">
            <img id="img_fondo2" src="./images/fondos/puertas/1.jpeg" alt="Puertas para tu Hogar o Negocio Chihuahua">
            <ion-icon id="left_btn" class="icon_left" name="chevron-back-outline"></ion-icon>
            <ion-icon id="right_btn" class="icon_right" name="chevron-forward-outline"></ion-icon>
        </div>
    </div>

    <div id="productos" class="servicios">
        <span class="title-section">GALERIA</span>
        <div class="categoria_servicios2">
            <?php
                    for($i=1;$i<=57;$i++){
                        echo "
                            <a>
                                <div class='servicio2'>
                                    <img src='./images/categorias/productos/puertas/".$i.".jpeg' alt='Puertas para tu Hogar o Negocio Chihuahua'>
                                </div>
                            </a>
                            ";
                    }
            ?>
        </div>
    </div>

    <?php require "contactMenu.php"; ?>
    <?php require "footer.php"; ?>

    <?php 
        $fotos=4;
        $cadena="./images/fondos/puertas/";
        include "./functions/generalFunctions.php"; 
    ?>

</body>

</html>