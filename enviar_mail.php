
<?php
$destino = "dekopuertas@gmail.com";
$nombre  = $_POST["nombre"];
$correo  = $_POST["correo"];
$mensaje  = $_POST["mensaje"];
$contenido = "Nombre : " .$nombre. "\nCorreo: ".$correo . "\nMensaje: ".$mensaje;

mail($destino,"contacto",$contenido);
header("Location:index.html"); 
 ?>
 
<!-- incluye aqui tu propio mensaje de Éxito-->
 

 
 

 
