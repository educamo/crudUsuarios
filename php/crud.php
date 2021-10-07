<?php 
	/**
	  * clase crud donde estan todos los metodos de 
	  */
	class crud {

		public function obtendatos($idcotizacion){
				/* Connect To Database*/		   
		    require_once ("conexion.php");//Contiene funcion que conecta a la base de datos

		    $sql = "SELECT id_cotizacion, 
		    numero_cotizacion, 
		    atencion, 
		    email,
		    fecha_cotizacion,
		    tel1,
		    empresa,
		    tel2,
		    condiciones,
		    validez,
		    entrega,
		    activo
		    FROM cotizaciones_demo
		    where id_cotizacion = '$idcotizacion'";

		    $result = mysqli_query($con, $sql);
		    $bus_cotizacion = mysqli_fetch_row($result);

		    $datos = array(
		    	'id_cotizacion' 	=> $bus_cotizacion[0],
		    	'numero_cotizacion' => $bus_cotizacion[1],
		    	'atencion' 			=> $bus_cotizacion[2],
		    	'email' 			=> $bus_cotizacion[3],
		    	'fecha_cotizacion' 	=> $bus_cotizacion[4], 
		    	'tel1' 				=> $bus_cotizacion[5],
		    	'empresa' 			=> $bus_cotizacion[6],
		    	'tel2' 				=> $bus_cotizacion[7],
		    	'condiciones' 		=> $bus_cotizacion[8],
		    	'validez' 			=> $bus_cotizacion[9],
		    	'entrega' 			=> $bus_cotizacion[10],
		    	'activo'			=> $bus_cotizacion[11],
		    );

		    mysqli_close($con);

		    return $datos;
		}

		public function actualizar($datos){
			/* Connect To Database*/
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

		public function eliminar($idcotizacion){
			/* Connect To Database*/
		    require_once ("conexion.php");//Contiene funcion que conecta a la base de datos

		    $sql = "DELETE from cotizaciones_demo where id_cotizacion = '$idcotizacion'";

			mysqli_close($con);
		    return mysqli_query($con, $sql);
		}

		
	}
?>
