<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style_login.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="container-form login">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenidos nuevamente!!</h2>
                <p>Para unirte a nuestra comunidad por favor inicia sesión con tus datos</p>
                <a href="registro.php">Registrarse</a>
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google-plus'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>
                <p>Inicia sesión con una cuenta</p>
                <form class="form" action="../php/index.php" method="POST">
                    <label>
                        <i class='bx bxs-envelope'></i>
                        <input type="email" placeholder="Correo electrónico" name="email">
                    </label>
                    <label>
                        <i class='bx bxs-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña" name="claveCorreo">
                    </label>
                    <input type="submit" value="Iniciar sesión">
                </form>
            </div>
        </div>
    </div> 
</body>
</html>