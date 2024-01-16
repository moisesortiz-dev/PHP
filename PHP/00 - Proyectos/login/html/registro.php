<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonst.googleapis.com">
    <link rel="preconnect" href="https://fonst.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style_registro.css">
    <title>Formulario de registro e inicio de session</title>
</head>
<body>
    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenidos</h2>
                <p>Para unirte a nuestra comunidad por favor inicia Sesion con tus datos</p>
                <!-- <input type="button" value="Iniciar Sesíon" id="sign-in"> -->
                <a href="login.php">Iniciar sesión</a>
            </div>

        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crea una cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google-plus'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>
                <p>Puedes utilizar tu email para registrate</p>
                <form class="form" action="../php/registro_bd.php" method="POST">
                    <label>
                        <i class='bx bx-user'></i>
                        <input type="text" placeholder="Nombre completo" name="nombre">
                    </label>
                    <label>
                        <i class='bx bxs-envelope'></i>
                        <input type="email" placeholder="Correo electronico" name="correo">
                    </label>
                    <label>
                        <i class='bx bxs-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña" name="clave">
                    </label>
                        <label>
                            <input type="checkbox" id="checkbox" name="es_administrador"> ¿Eres administrador?
                        </label>
                        <input type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
</body>
</html>