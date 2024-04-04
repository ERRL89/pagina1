<script>
    const menu_slide = document.getElementById("activo")
    const contenedor = document.getElementById("contenedor")
    const botones = document.getElementById("botones")
    const qr = document.getElementById("qr")
    const qr2 = document.getElementById("qr2")

    const img_fondo = document.getElementById("img_fondo")
    const img_fondo2 = document.getElementById("img_fondo2")
    const right_btn = document.getElementById("right_btn")
    const left_btn = document.getElementById("left_btn")

    let imagen=1

    function miFuncion() {
    imagen=imagen+1
    if(imagen>'<?php echo $fotos; ?>')
    {
        imagen=1
    }
    cadena='<?php echo $cadena; ?>'+imagen+".jpeg"
    img_fondo.src=cadena
    img_fondo2.src=cadena
    }

    // Ejecutar la función cada 5000 milisegundos (5 segundos)
    setInterval(miFuncion, 5000)

    right_btn.onclick = function () {
    imagen=imagen+1
    if(imagen>'<?php echo $fotos; ?>')
    {
        imagen=1
    }
    cadena='<?php echo $cadena; ?>'+imagen+".jpeg"
    img_fondo.src=cadena
    img_fondo2.src=cadena
    }

    left_btn.onclick = function () {

    imagen=imagen-1
    if(imagen<=0)
    {
        imagen='<?php echo $fotos; ?>'
    }
    cadena='<?php echo $cadena; ?>'+imagen+".jpeg"
    img_fondo.src=cadena
    img_fondo2.src=cadena
    }


    //function to do big and small the slide menu
    menu_slide.onclick = function () {
    if (contenedor.className == "contenedor active2") {
        contenedor.className = "contenedor"
        botones.className = "botones"
        qr2.className = "qr2"
    }
    menu_slide.classList.toggle("active")
    contenedor.classList.toggle("active")
    botones.classList.toggle("active")
    }

    //function to show code qr in slide menu
    qr.onclick = function () {
    qr2.classList.toggle("active2")
    qr.classList.toggle("active2")
    contenedor.classList.toggle("active2")
    botones.classList.toggle("active2")
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
</script>

