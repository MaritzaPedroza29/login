<?php
class Registro{
function insertar($nom,$cor,$clave){
    try{
        $conet=new Db();
        $consulta="INSERT INTO `login`(`nombre`,`usuario`, `contrasena`) VALUES ('$nom','$cor','$pass')"; 
        $resul=mysqli_query( $conet, $consulta);
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
    $resul=mysqli_query( $conet, $consulta);
    $filas=mysqli_num_rows($resul);
    return $filas;
} catch (\Throwable $th){
    //throw exception $th;
}
} 
function mensaje($num){
    if($num==1){
        echo'
        <script>
        alert("Datos vacios");
        window.location = "registrarse.php";
        </script>
        ';
    } 
    if($num==2){
        echo' <script>
        alert("Este correo ya existe");
        window.location = "login.php";
        </script>
        ';
    }else{
        echo '
        <script>
        alert("Registro exitoso");
        window.location="login.php;
        </script>
        ';
    }
   
}
}

?>