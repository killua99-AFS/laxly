<?php
$servidor= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "formulario";


$conectar=mysqli_connect($servidor,$dbuser,$dbpass,$dbname);

if(!$conectar){
    echo"no se pudo conectar el servidor";
}else{

    $base=mysqli_select_db($conectar,$dbname);
    if(!$base){
        echo"no se encontro la base de datos";
    }
}


?>