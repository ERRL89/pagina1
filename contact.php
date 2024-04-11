<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns#">

<head>
    <?php require "head.php"; ?>
    <title>Contáctanos</title>
    <link rel="canonical" href="https://vidrioyaluminiolosdoscarnales.com/contact.php" />
    <meta property="og:title" content="Contacto Vidrio y Aluminio Aldama Chihuahua México " />
    <meta property="og:url" content="https://vidrioyaluminiolosdoscarnales.com/" />
    <meta property="og:image" content="https://vidrioyaluminiolosdoscarnales.com/images/og/og-image.png" />
</head>

<body>

    <?php require "header.php"; ?>

    <div class="fondoprincipal">
        <div class="fondo_texto">
            <h1 class="principal_title">CONTACTO</h1>
            <img id="img_fondo" src="./images/fondos/contacto/1.jpeg"
                alt="Soluciones en Vidrio y Aluminio Chihuahua">
        </div>
        <div class="conteiner_imgprincipal">
            <img id="img_fondo2" src="./images/fondos/contacto/1.jpeg" alt="Soluciones en Vidrio y Aluminio en Chihuahua">
            <ion-icon id="left_btn" class="icon_left" name="chevron-back-outline"></ion-icon>
            <ion-icon id="right_btn" class="icon_right" name="chevron-forward-outline"></ion-icon>
        </div>
    </div>

    <div id="formularioContacto" class="mt-5 mb-5 p-3">
      <h2 class="text-center">Formulario de Registro</h2>
      <h6 class="text-center">* Porfavor llene los campos solicitados *</h6>
      <form id="form">
        <!-- Formulario de Contrato -->
        <div class="container-sm container_form_custom">

          <div class="mb-3 "><!-- Nombre/Numero de Referido -->
          <div class="row mb-3">
              <div class="col-md-12"><!-- Nombre -->
                <label for="nombre" class="form-label label-custom">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+" required>
                <div class="invalid-feedback">Introduce tu Nombre</div>
              </div>
            </div>
          </div>

          <div class="mb-3"><!-- Direccion: Calle - Numero - Colonia -->
            <label for="direccion" class="form-label label-custom">Dirección:</label>
            <div class="row mb-3">
              <div class="col-md-6 mb-2">
                <input type="text" class="form-control form-input" placeholder="Calle" id="calle" name="calle"  required>
                <div class="invalid-feedback">Introduce tu calle</div>
              </div>
              <div class="col-md-3 mb-2">
                <input type="text" class="form-control form-input" placeholder="Número" id="numero" name="numero" required>
                <div class="invalid-feedback">Introduce tu numero</div>
              </div>
              <div class="col-md-3 mb-2">
                <input type="text" class="form-control form-input" placeholder="Colonia" id="colonia" name="colonia" required>
                <div class="invalid-feedback">Introduce tu colonia</div>
              </div>
            </div>
          </div>

          <div><!-- Telefono/Email -->
            <div class="row mb-3">
                <div class="col-md-6"><!-- Telefono -->
                  <label for="phone" class="form-label label-custom">Teléfono:</label>
                  <input type="number" class="form-control sinBotonera" id="telefono" name="phone" placeholder="5512345678" required>
                  <div class="invalid-feedback">Introduce tu teléfono</div>
                </div>
                <div class="col-md-6"><!-- Email -->
                  <label for="email" class="form-label label-custom">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@acil.mx" required>
                  <div class="invalid-feedback">Introduce tu email</div>
                </div>
            </div>
          </div>

        <!-- Boton de Contratar launchUploadFiles() -->
          <div class="container-fluid d-flex justify-content-center align-items-center mt-5">
                <center><button onclick="sendForm()" type='button' id='btnContinuar' class='btn btn-primary btn-cotiza'><strong>ENVIAR</strong></button></center> 
          </div>

        </div>
      </form>
    </div>

    <script>
      function sendForm(){
        alert("Hola Flaco")
      }
    </script>

    <?php require "contactMenu.php"; ?>
    <?php require "footer.php"; ?>
    <?php 
        $fotos=1;
        $cadena="./images/fondos/contacto/";
        include "./functions/generalFunctions.php"; 
    ?>

</body>

</html>