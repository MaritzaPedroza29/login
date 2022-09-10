<?php
class Registro{
function insertar($nom,$cor,$clave){
    try{
        $conet=new Db();
        $consulta="INSERT INTO `login`(`nombre`,`usuario`, `contrasena`) VALUES ('$nom','$cor','$pass')"; 
        $resul=mysqli_query( $conexion, $consulta);
        $filas=mysqli_num_rows($resul);
        return $filas;
    } catch (\Throwable $th){
        //throw exception $th;
    }
}
function seleccionar($nom,$cor,$pass){
    try{
    $conet=new Db();
    $consulta="SELECT `usuario`, `nombre`, `contrasena` FROM `login`";
    echo $consulta;
    $resul=mysqli_query( $conexion, $consulta);
    $filas=mysqli_num_rows($resul);
    return $filas;
} catch (\Throwable $th){
    //throw exception $th;
}
} 
}
?>