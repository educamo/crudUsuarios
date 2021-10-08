

<?php

$nombres=array("maria", "jose", "luis", "lupita");
$apellidos=array("Monsalva", "carrasco", "Castillo", "Ferrer");

include('obtenerdatos.php');
?>


<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?Php


for($i=0; $i<count($data); $i++)
{
              $id = $data[$i]->idUsuario;
  
             echo "<tr>
                         <td>".$data[$i]->idUsuario."</td>
                         <td>".$data[$i]->nombres."</td>
                         <td>".$data[$i]->apellidos."</td>
                         <td>".$data[$i]->direccion."</td>
                         <td>".$data[$i]->telefono."</td>
                         <td>".$data[$i]->mail."</td>                         
                         <td>
                            <a href='php/actualizar.php?id=".$id."' alt='Editar Registro'><i class='btn btn-warning btn-sm'><span class='fa fa-edit'></span></i></a>
                            <a href='#' id='".$id."' class='borrar' alt='Eliminar el Registro'><i class='btn btn-danger btn-sm'><span class='fa fa-trash'></span></i></a>
                         </td>
                    </tr>";
          }
 
    ?> 
    </tbody>
</table>


    <script>
        $(".borrar").click((function(event){
        event.preventDefault();
        var id = $(".borrar").attr("id");
        
        var opcion = confirm("Esta seguro de querer eliminar este registro");
     
        if (opcion == true)
        {
            var url = "php/eliminar.php?id="+id;

            window.location = url;
        }

    }));
    </script>