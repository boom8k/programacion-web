<?php

include_once('db.php');

$conectar=conn();
if(isset($_POST['cedula'])){


    $nombres=$_POST['cedula'];
 

    $consultar="SELECT*FROM ingreso where nombres='$nombres'";

    $validar = mysqli_query($conectar , $consultar);
    $result = $conectar->query($consultar);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            $ci_d = $row["cedula"];
            $nombres = $row["nombres"];
            $apellidos = $row["apellidos"];

            echo '
               
                <tr> 
                <h1 style="text-align:center;">Titular</h> <br>
                  <td>Cedula: '.$cedula.'</td> <br>
                  <td>Nombre: '.$nombres.'</td> <br>
                  <td>Apellido: '.$apellidos.'</td> <br>
                  /tr>';
        
    }
    $result->free();
    exit;
} 
  }else {
  echo "0 results";
}
$mysqli->close();
   
    
    ?>