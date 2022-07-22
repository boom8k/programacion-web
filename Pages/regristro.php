<?php
include_once('db.php');

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $cedula=$_POST['cedula'];
    $correo=$_POST['correo'];
    $primera=$_POST['primera'];
    $segunda=$_POST['segunda'];
    echo "los datos: <br>";
    echo "$nombres,$apellidos,$cedula,$correo,$primera,$segunda";
    
    $conectar=conn();
    $sql="INSERT INTO usuario (nombres, apellidos, cedula, correo, primera, segunda)
   VALUES ('$nombres', '$apellidos', '$cedula', '$correo', '$primera', '$segunda')";
     $resul = mysqli_query($conectar , $sql)or trigger_error("query failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);
	
    mysqli_close($conectar);
    echo "datos  correctamente";
    header('location: consulta.html');
?>