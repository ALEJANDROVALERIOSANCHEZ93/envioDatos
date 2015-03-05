<?php

$usuario="n260m_15888948";
$servidor="sql313.260mb.net";
$BD="n260m_15888948_prueba";
$password="ROMANO93";

$conexion=mysql_connect($servidor,$usuario,$password)or die("Error en la conexion: ".mysql_error());
mysql_select_db($BD, $conexion);
?>