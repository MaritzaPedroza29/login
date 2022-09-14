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
    <h1>Registro</h1><br></br>
    <form method="POST" action="controladorregistro.php">
        <div class="username">
                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                name="usuario" placeholder="nombre"></br>
                <div class="username"><br>
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                       name="correo" placeholder="correo electrónico"></div></br>
                </div>
                <div class="username">
                <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword"  name="clave" placeholder="contraseña">
                </div><br>
                <div class="recordar">¿Olvido su contraseña?</div><br>
                <div>
                <input type="submit" value="resgitrarse" name="registrarse">
                </div><br>
                <div class="registrarse">
                    Ya tienes cuenta?<a href="login.php">Login</a>
            </div>
        </div>
    </form>
</div>

</div>
</boby>

</html>