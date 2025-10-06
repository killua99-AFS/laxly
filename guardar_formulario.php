<?php
include("conexion.php");
//recuperar las variables
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $correo=$_POST['correo'];
  $fecha=$_POST['fecha'];
  //hacemos la sentencia de sql
  $sql="INSERT INTO formulario VALUES('$nombre',
                   '$apellido',
                   '$correo',
                    '$fecha')";
  //ejecutamos la sentencia de sql
  $ejecutar=mysqli_query($conectar,$sql);
  //verificamos la ejecucion
  if(!$ejecutar){
    echo"Hubo Algun Error";
  }else{
    echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
}
?>