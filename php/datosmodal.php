<?php 
require_once ("conexion.php");//Contiene funcion que conecta a la base de datos

$idUsuario = $_POST['id'];


    $sql = "SELECT * FROM usuarios WHERE idUsuario = $idUsuario";


    $result = mysqli_query($con, $sql);
    $bus_usuario = mysqli_fetch_row($result);

  
   
    $datos = array(
      'idUsuario'  => $bus_usuario[0],
      'nombres'    => $bus_usuario[1],
      'apellidos'  => $bus_usuario[2],
      'direccion'  => $bus_usuario[3],
      'telefono'   => $bus_usuario[4],
      'correo'     => $bus_usuario[5],      
    );



    mysqli_close($con);





    echo  json_encode($datos);

?>