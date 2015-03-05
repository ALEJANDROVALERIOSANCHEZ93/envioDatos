<?php
include("conexion2.php");

$nom=$_POST["nombre"];
$app=$_POST["apellidop"];
$apm=$_POST["apellidom"];
$tel=$_POST["telefono"];
$email=$_POST["email"];
$direc=$_POST["direccion"];
$obs=$_POST["observaciones"];

$sql="INSERT INTO usuarios (Id_Usuario,Nombre, Apellido_P,Apellido_M,Telefono,Correo,Direccion,Observaciones) VALUES('','$nom','$app','$apm','$tel','$email','$direc','$obs')";
$insertar=mysql_query($sql,$conexion);

if($insertar){
echo "Nombre:".$nom."<br>"; 
echo "Apellidop:".$app."<br>";
echo "Apellidom:".$apm."<br>";
echo "Telefono:".$tel."<br>";
echo "Email:".$email."<br>";
echo "Direccion:".$direc."<br>";
echo "Observaciones:".$obs."<br>";
echo "Datos guardados satisfactoriamente";
}else{
echo "Error al enviar los datos: ".mysql_error();
}
mysql_close($conexion);

?>