<?php
//datos de conexión
define('DB_SERVER','localhost');
define('DB_NAME','proyectox');

$conexion = mysql_connect('localhost','root','') or die ('No se pudo conectar'. mysql_error());
echo 'Se conecto correctamente';
mysql_select_db('proyectox',$conexion) or die ("Ocurrio un error, por favor intente de nuevo más tarde".mysql_error($conexion));
?>
