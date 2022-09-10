<?php
require_once "conexion.php";
require_once "model/usuario.php";
session_start();

if(isset($_GET['salir'])){
  session_destroy();
  header("location: login.php");
}
$persona= new Persona ();
$user=$_POST['usuario'];
$pass=$_POST ['clave'];
$persona->validacion($user, $pass);
    
if(isset($_POST['iniciar'])){
    $_SESSION ['usuario']= $user;
    header("location: principal.php");
}else{
  ?>
  <?php
  header("location: login.php");
 
}

?>