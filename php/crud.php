<?php 
	/**
	  * clase crud donde estan todos los metodos
	  */
	class crud {

		public function obtendatos(){		    
		    require_once ("conexion.php");//Contiene funcion que conecta a la base de datos

		    $sql = "SELECT * FROM usuarios";
			$datos = array();

		    $result = mysqli_query($con, $sql);
	

			while($objeto = mysqli_fetch_object($result)){

				array_push($datos, $objeto);
				}
			

		    mysqli_close($con);

		    return $datos;
		}

		public function actualizar($datos){			   
		    require_once ("conexion.php");//Contiene funcion que conecta a la base de datos

		    $sql = "UPDATE usuarios set 
										idUsuario = '$datos[0]{, 
										nombres   = '$datos[1]', 
										apellidos = '$datos[2]', 
										direccion = '$datos[3]', 
										telefono  = '$datos[4]', 
										mail      = '$datos[5]',	

							where idUsuario = '$datos[0]'";

			$datos= mysqli_query($con, $sql);


			mysqli_close($con);

			return $datos;
		}

		public function eliminar($id){		
		    require_once ("conexion.php");//Contiene funcion que conecta a la base de datos

		    $sql = "DELETE from usuarios where idUsuario = $id";

			
		    mysqli_query($con, $sql);
			mysqli_close($con);
			return false;
		}

		public function guardar($datos){
			require_once ("conexion.php");//Contiene funcion que conecta a la base de datos
			
		    $sql = "INSERT INTO usuarios (idUsuario, nombres, apellidos, direccion, telefono, mail) 
					VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]')";

$datos= mysqli_query($con, $sql);

			mysqli_close($con);

			return $datos;

		}

		
	}
?>
