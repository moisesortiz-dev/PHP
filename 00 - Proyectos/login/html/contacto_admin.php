<?php 
include("../php/logout_session.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("../php/cabecera.php"); ?>
    <link rel="stylesheet" href="../css/style_contacto.css">
</head>
<body>
<?php include("../php/header_administrador.php") ?>
    <div class="container">
        <header class="hero">
            <h1 class="titulo">Contáctanos</h1>
        </header>
        <main class="main-contacto">
            <section class="contenido-contacto">
                <p class="intro">¡Estamos emocionados de escucharte! Contáctanos utilizando el formulario a continuación o mediante la información de contacto proporcionada.</p>

                <div class="formulario-contacto">
                    <form action="procesar_formulario.php" method="post">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>

                        <label for="asunto">Asunto</label>
                        <input type="text" id="asunto" name="asunto" placeholder="Asunto" required>

                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" placeholder="Correo electronico" required>

                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" rows="4" required placeholder="Escribe aqui tu consulta..."></textarea>

                        <button type="submit">Enviar Mensaje</button>
                    </form>
                </div>

                <div class="info-contacto">
                    <h2><b>Información de Contacto</b></h2>
                    <p><b>web:</b> www.empresaficticia.com</p>
                    <p><b>Dirección:</b> Empresa ficticia en Malaga</p>
                    <p><b>Teléfono:</b> 000-000-000</p>
                    <p><b>Correo de cotacto:</b> Programadordeep@gmail.com</p>
                </div>

            </section>
        </main>
    </div>
<footer>
    <?php include("../php/footer.php") ?>
</footer>
</body>