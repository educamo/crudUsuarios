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

		    $sql = "UPDATE cotizaciones_demo set 
		    									numero_cotizacion = '$datos[1]', 
											    atencion = '$datos[2]', 
											    email = '$datos[3]',
											    fecha_cotizacion = '$datos[4]',
											    tel1 = '$datos[5]',
											    empresa = '$datos[6]',
											    tel2 = '$datos[7]',
											    condiciones = '$datos[8]',
											    validez = '$datos[9]',
											    entrega = '$datos[10]',
											    activo = '$datos[11]' 
									      where id_cotizacion = '$datos[0]'";

			$datos= mysqli_query($con, $sql);

			mysqli_close($con);

			return $datos;
		}

		public function eliminar($id){		
		    require_once ("conexion.php");//Contiene funcion que conecta a la base de datos

			//var_dump($id); die();

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
