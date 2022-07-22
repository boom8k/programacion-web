<?php
function conn(){
    $host = "localhost";     
	$usuariodb = "root";    
	$clavedb = ""; 
    $dbname = "vacuna3";    


    $conectar = mysqli_connect($host,$usuariodb,$clavedb,$dbname)
    or die ("error en la conexion");
    return $conectar;

}

?>