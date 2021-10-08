

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
                         
                            <a href='#' data-toggle='modal' data-target='#dataUpdate' onclick='mostrar($id)' title='Editar Registro'><i class='btn btn-warning btn-sm'><span class='fa fa-edit'></span></i></a>
                            <a href='#' onclick='borrar($id)' title='Eliminar el Registro'><i class='btn btn-danger btn-sm'><span class='fa fa-trash'></span></i></a>
                         </td>
                    </tr>";
          } 
 
    ?> 
    </tbody>
</table>