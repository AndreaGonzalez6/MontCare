<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/all.css" />

</head>

<body>

    <main>
        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn_iniciar_sesion" type="submit"> Inicia sesión</button>
                </div>
                <div class="caja_trasera_register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn_registrarse" type="submit">Registrarse</button>
                </div>
            </div>


            <!-- Formulario de login y registro -->
            
            <!-- Login -->
            <div class="contenedor_login_register">
                <form action="php/login_usuario_be.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required> 
                    <button type="submit" class="entrar"> Ingresar </button>
                </form>

                <!-- Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">
                    <h2>Registrarse</h2>
                    <div class="select ola">
                        <select name="format" id="format" required>
                            <option selected disabled>Documento de identidad 
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

                    <input type="text" placeholder="Número de documento"  name="numero_documento" required >
                    <input type="text" placeholder="Nombre completo"  name="nombre_completo" required >
                    <input type="text" placeholder="Apellidos"  name="apellidos" required >
                    <input type="date" class="date" placeholder="Fecha de nacimiento"  name="fecha_nacimiento" required >
                    <input type="email" placeholder="E-mail"  name="correo" required >
                    <input type="text" placeholder="Número de teléfono"  name="telefono" required >
                    <input type="text" placeholder="Usuario"  name="usuario" required >
                    <input type="password" placeholder="Contraseña"  name="contrasena" required >
                    <input type="password" placeholder="Confirme su contraseña"  name="confirm_contrasena" required >
                    <button type="submit" class="btn"> Registrarse </button>
                </form>
            </div>
        </div>
        
        <script>
    // Obtiene la fecha actual en formato ISO (AAAA-MM-DD)
    var fechaActual = new Date().toISOString().split("T")[0];

    // Establece el valor máximo para el input date
    document.getElementById("fechaInput").setAttribute("max", fechaActual);
</script>

    </main>

    <script src="js/all.js"></script>
    <script src="js/registro.js"></script>
</body>

</html>
