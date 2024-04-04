<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns#">

<head>
    <?php require "head.php"; ?>
    <title>Canceles para baño Vidrio y Aluminio Chihuahua</title>
    <link rel="canonical" href="https://vidrioyaluminiolosdoscarnales.com/canceles.php" />
    <meta property="og:title" content="Canceles para Baño Vidrio y Aluminio" />
    <meta property="og:url" content="https://vidrioyaluminiolosdoscarnales.com/" />
    <meta property="og:image" content="https://vidrioyaluminiolosdoscarnales.com/images/og/og-image.png" />
</head>

<body>

    <?php require "header.php"; ?>

    <div class="fondoprincipal">
        <div class="fondo_texto">
            <h1 class="principal_title">VIDRIO Y ALUMINIO</h1>
            <h2>"Canceles para Baño"</h2>
            <img id="img_fondo" src="./images/fondos/canceles/1.jpeg"
                alt="Soluciones en Vidrio y Aluminio Chihuahua">
        </div>
        <div class="conteiner_imgprincipal">
            <img id="img_fondo2" src="./images/fondos/canceles/1.jpeg" alt="Soluciones en Vidrio y Aluminio en Chihuahua">
            <ion-icon id="left_btn" class="icon_left" name="chevron-back-outline"></ion-icon>
            <ion-icon id="right_btn" class="icon_right" name="chevron-forward-outline"></ion-icon>
        </div>
    </div>

    <div id="productos" class="servicios">
        <span class="title-section">GALERIA</span>
        <div class="categoria_servicios2">
            <?php
                for($i=1;$i<=42;$i++){
                    echo "
                        <a>
                            <div class='servicio2'>
                                <img src='./images/categorias/productos/canceles/".$i.".jpeg' alt='Canceles de Baño en Policarbonato Cristal Templado y Herrajes de Acero Inoxidable Chihuahua'>
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
        $cadena="./images/fondos/canceles/";
        include "./functions/generalFunctions.php"; 
    ?>

</body>

</html>