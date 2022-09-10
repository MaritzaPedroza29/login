<?php
require_once "conexion.php";
require_once "model/resgistro.php";
$registro= new Registro ();
if(isset($_POST['registrarse'])){
    if(empty($_POST['usuario']) or empty($_POST['correo']) or empty($_POST['clave'])){
        echo'
        <script>
        alert("Datos vacios");
        </script>
        ';
        exit;
    }
        $nom=$_POST['nombre'];
        $cor=$_POST['correo'];
        $clave=$_POST['clave'];
        $registro->seleccionar($nom,$cor,$clave);
        if($registro>0){
           echo' <script>
        alert("Este correo ya existe");
        window.location = "login.php";
        </script>
        ';
    }else{
        $registro->insertar($nom,$cor,$clave);
        echo '
        <script>
        alert("Registro exitoso");
        </script>
        ';
    }
}
?>