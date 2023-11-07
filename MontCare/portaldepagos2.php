<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/portaldepagos.css">
    <title>Portal de pagos</title>
</head>

<body>

    <div class="container">

        <!-- Barra gris 1 -->
        <div class="row gris">
            <div class="col-md-12">
                <i class="fa-solid fa-1 bolita-negra" style="color: #ffffff;"></i>
                <p style="display: inline;" class="tusdatos"> Tus datos </p>
            </div>
        </div>

        <!-- Contenido -->
        <div class="row margin">
            <div class="col-md-2">
                <img src="cara de niño.png" class="cara_niño" alt="cara_niño" style="height: 22vh;">
            </div>
            <div class="col-md-3">
                <!--Formulario 1 -->
                <form action="php/vpago2.php" method="POST">
                 <label for="" style="display: inline;" class="tusdatos"> Ingrese su correo: </label> 
                 <input type="email" name="correo" placeholder="Correo" required> <br>

                 <label for="" style="display: inline;" class="tusdatos"> Ingrese su contraseña: </label> 
                 <input type="password" name="contrasena" placeholder="Contraseña" required > <br>

                 <button type="submit" class="btn btn-warning"> Validar información </button>
                </form>
            </div>
        </div>

        <!-- Barra gris 2 -->
        <div class="row gris">
            <div class="col-md-8">
                <i class="fa-solid fa-2 bolita-negra2" style="color: #fafcff;"></i></i>
                <p style="display: inline;" class="tusdatos"> Selecciona el método de pago </p>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0);"><i class="fa-solid fa-pencil lapiz" style="color: #c9a645;"></i>
                    <p style="display: inline;" class="Mdatos" id="cambiarTipoTarjeta"> Cambiar método de pago </p>
                </a>
            </div>
        </div>

        <script>
            const cambiarTipoTarjeta = document.getElementById("cambiarTipoTarjeta");

            cambiarTipoTarjeta.onclick = function () {
                const tipoTarjetaTexto = document.getElementById("tipoTarjetaTexto");
                if (tipoTarjetaTexto.textContent === "Tarjeta de Crédito") {
                    tipoTarjetaTexto.textContent = "Tarjeta de Débito";
                } else {
                    tipoTarjetaTexto.textContent = "Tarjeta de Crédito";
                }
            };

        </script>


        <!-- Contenido -->
        <div class="row margin">
            <div class="col-md-2">
                <p id="tipoTarjetaTexto" class="tarjeta-tipo"> Tarjeta de Crédito </p>
            </div>
            <div class="col-md-10">
                <button class="boton" data-tarjeta="visa" data-imagen="visa.png"> <img src="visa.png" alt=""
                        height="40vh"></button>

                <button class="boton" data-tarjeta="mastercard" data-imagen="mastercard.png"> <img src="mastercard.png"
                        alt="" height="40vh"></button>
                <button class="boton" data-tarjeta="american" data-imagen="american.png"> <img src="american.png" alt=""
                        height="40vh"></button>
                <script>
                    function actualizarImagenTarjeta(tipoTarjeta) {
                        const inputNumeroTarjeta = document.getElementById("numeroTarjeta");
                        const rutaImagen = document.querySelector(`button[data-tarjeta="${tipoTarjeta}"]`).getAttribute("data-imagen");

                        // Establece la imagen del input
                        inputNumeroTarjeta.style.backgroundImage = `url(${rutaImagen})`;
                        inputNumeroTarjeta.style.backgroundSize = "5vh";
                        inputNumeroTarjeta.style.backgroundRepeat = "no-repeat";
                        inputNumeroTarjeta.style.backgroundPosition = "right center";
                        inputNumeroTarjeta.style.border = "1px solid";
                    }

                    // Agrega event listeners para los botones de todas las tarjetas
                    document.querySelector('button[data-tarjeta="visa"]').addEventListener('click', () => {
                        actualizarImagenTarjeta('visa');
                    });
                    document.querySelector('button[data-tarjeta="mastercard"]').addEventListener('click', () => {
                        actualizarImagenTarjeta('mastercard');
                    });
                    document.querySelector('button[data-tarjeta="american"]').addEventListener('click', () => {
                        actualizarImagenTarjeta('american');
                    });
                </script>
            </div>
        </div>

        <!-- Formulario 2-->
        <div class="row" id="formulario2" style="display: none">
            <form action="php/rpago2.php" method="POST">
                <div class="mb-3">
                    <label for="">Nombre del propietario* </label>
                    <input type="text" class="espaciado" name="nombre" required>
                </div>
                <div class="mb-3 select">
                    <label for="">Documento de identificación* </label>
                    <select name="format" id="format" required>
                        <option selected disabled>
                        <option class="ola2" value="CC">Cédula de ciudadanía</option>
                        <option class="ola2" value="CE">Cédula de extranjería</option>
                        <option class="ola2" value="DE">Documento de extranjería</option>
                        <option class="ola2" value="PAS">Pasaporte</option>
                        <option class="ola2" value="RC">Registro Civil</option>
                        <option class="ola2" value="TI">Tarjeta de identidad</option>
                        <option class="ola2" value="PE">Permiso especial</option>
                        <option class="ola2" value="CD">Carnet diplomático</option>
                        <option class="ola2" value="SC">Salvoconducto</option>
                        <option class="ola2" value="PPT">Permiso por Protección Temporal</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Número de documento* </label>
                    <input type="password" name="numerodoc" class="espaciado" required>
                </div>
                <div class="mb-3">
                    <label for="">Número de tarjeta* </label>
                    <input type="number" id="numeroTarjeta" class="espaciado" placeholder="1234 5678 1234 5678"
                        required>
                </div>
                <div class="mb-3">
                    <label for="">Código de seguridad* </label>
                    <input type="password" class="espaciado" minlength="3" maxlength="3" placeholder="CVC/CVV" required>
                </div>
                <div class="mb-3">
                    <label for="">Fecha vencimiento* </label>
                    <input type="number" class="espaciado peque" required>
                    <label for=""> </label>
                    <label for="">/</label>
                    <input type="number" class="espaciado peque" required>
                </div>
                <div class="mb-3">
                    <label for="">Teléfono Celular* </label>
                    <input type="password" class="espaciado" required>
                </div>
                <div class="mb-3">
                    <label for="">Cuota a pagar* </label>
                    <label for="">$10000</label>
                </div>

                <button type="submit" class="btn btn-primary">Pagar</button>
            </form>
        </div>
        <script>
 var formulario1Completado = false; // Inicializar la variable en el contexto de portaldepagos.php

<?php
if (isset($_GET['formulario1Completado']) && $_GET['formulario1Completado'] === 'true') {
    echo 'formulario1Completado = true;';
}
?>

if (formulario1Completado) {
    // Muestra el "formulario 2"
    document.querySelector("#formulario2").style.display = "block";
} else {
    // Oculta el "formulario 2"
    document.querySelector("#formulario2").style.display = "none";
}
</script>

    </div><!-- Cierre container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>