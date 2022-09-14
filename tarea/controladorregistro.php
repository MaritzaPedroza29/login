<?php
require_once "conexion.php";
require_once "model/resgistro.php";
$registro= new Registro ();
        $nom=$_POST['nombre'];
        $cor=$_POST['correo'];
        $clave=$_POST['clave'];
        if(isset($_POST['registrarse'])){
        if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['clave'])){
            $dato=$registro->mensaje(1);
            exit;
        }
            $dato=$registro->seleccionar($nom,$cor,$clave);
            if($dato>0){
                $dato=$registro->mensaje(2);
        }else{
            $dato=$registro->insertar($nom,$cor,$clave);
            $dato=$registro->mensaje(3);
        }
    }
?>
