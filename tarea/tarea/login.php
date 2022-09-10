<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charse="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <tittle></tittle>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="estilo.css">
</head>
<boby>
<div class="formulario">
    <h1>Inicio de sesion</h1>
    <form method="post" action="controladorlogin.php">
        <div class="username">
                    <input type="email" class="form-control form-control-user"
                        id="usuario" name="usuario" aria-describedby="emailHelp"
                        placeholder="Usuario">
                <div class="username">
                        <input type="password" class="form-control form-control-user"
                        id="clave" name="clave" placeholder="contraseña"></div>
                </div>
                <div class="recordar">¿Olvido su contraseña?</div>
                <div>
                <input type="submit" value="iniciar" name="iniciar">
                </div><br>
                <div class="registrarse">
                    crear una cuenta <a href="registrarse.php">registrarse</a>
            </div>
        </div>
    </form>
</div>
</boby>

</html>