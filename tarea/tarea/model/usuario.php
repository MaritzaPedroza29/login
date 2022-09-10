<?PHP
class Persona{

    
    function consultar($tabla,$wh=NULL){
        try {
              
            $conet=new Db();
            $sql="SELECT * FROM  $tabla ".$wh;   
           
            $rs=$conet->query($sql);
            //$rs=$rs->fetch_object();
            $conet->close();
            return $rs;
              //code...
          } catch (\Throwable $th) {
              //throw $th;
          }
    }
    function validacion($user,$pass){
        try{
            $conet=new Db();
            $consulta="SELECT `usuario`, `contrasena` FROM `login` WHERE usuario='$user' AND contrasena ='$pass'"; 
            $resul=mysqli_query( $conexion, $consulta);
            $filas=mysqli_num_rows($resul);
            return $filas;
        } catch (\Throwable $th){
            //throw exception $th;
        }
    }
}
?> 