<?php
require "../config/conexion.php";
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$celular = $_POST["celular"];
$email = $_POST["email"];



if ($edad >=18)
{
   $sql = "INSERT INTO registro(nombre, edad, celular, email, fecha_sys) VALUES ('".$nombre."', '".$edad."', '".$celular."', '".$email."', now())";
   if($conexion->query($sql))
   {
    echo "registro exitosa";
   
   }
} else {
    echo "registro fallido, debes tener 18, lo sentimos.";
}

?>