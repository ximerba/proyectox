<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
@$primer = $_POST["primer"];
@$celular = $_POST["celular"];
@$nombre = $_POST["user"];
@$apellido = $_POST["apellido"];
@$direccion = $_POST["direccion"];
@$lavado = $_POST["lavadoL"];
@$sms = $_POST["smsL"];
@$nombre1 = strtoupper ($nombre);
@$apellido1 = strtoupper ($apellido);
@$direccion1 = strtoupper ($direccion);
@$numero = "09".$primer.$celular;

include_once("conexion.php");
$_GRABAR_SQL = "INSERT INTO aplicacion (numero,nombre,apellido,direccion,lavado,sms) VALUES ('$numero','$nombre1','$apellido1','$direccion1','$lavado','$sms')";   
mysql_query($_GRABAR_SQL);  

// Cerramos la conexion a la base de datos   
@desconectar($link);
@session_destroy($link); 

if ($primer == "1" || $primer == "2" || $primer == "8" || $primer == "9"){
echo"

echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
echo "
<form class='aplicacion'>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
Estimado/a $nombre1 $apellido1 se enviará un sms al número Ancel 09$primer$celular en cuanto esté listo su lavado.
Muchas gracias!
</form>
";
/*echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
echo "Estimado $nombre1 $apellido1 se enviará un sms al número Ancel 09$primer$celular y su lavado será entregado en $direccion1.";
echo "<br>";
echo "Muchas gracias!"; */
}elseif($primer == "3" || $primer == "4" || $primer == "5"){
echo"

";
echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
echo "
<form class='aplicacion'>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
Estimado/a $nombre1 $apellido1 se enviará un sms al número Movistar 09$primer$celular en cuanto esté listo su lavado.
Muchas gracias!
</form>
"; 
}elseif($primer == "6" || $primer == "7"){
echo"
<style type='text/css'> 
*{ 
    font-size: 14px; 
} 
body{ 
background:#aaa; 
} 
form.aplicacion { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #DDDDDD; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 20px; 
    width: 300px; 
    box-shadow:0px 0px 20px black; 
    border-radius:10px; 
} 
form.aplicacion div { 
    margin-bottom: 15px; 
    overflow: hidden; 
} 
form.aplicacion div label { 
    display: block; 
    float: left; 
    line-height: 25px; 
} 
form.aplicacion div input[type='text'], form.aplicacion div input[type='numeric'] { 
    border: 1px solid #DCDCDC; 
    float: right; 
    padding: 4px; 
} 
form.aplicacion div input[type='title'] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 5px solid #C6C6C6; 
    float: center; 
    font-weight: bold; 
    padding: 10px 20px;
}
form.aplicacion div input[type='submit'] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 1px solid #C6C6C6; 
    float: center; 
    font-weight: bold; 
    padding: 4px 20px; 
} 
.error{ 
    color: red; 
    font-weight: bold; 
    margin: 10px; 
    text-align: center; 
} 
</style> 
";
echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
echo "
<form class='aplicacion'>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
Estimado/a $nombre1 $apellido1 se enviará un sms al número Claro 09$primer$celular en cuanto esté listo su lavado.
Muchas gracias!
</form>
"; 
}else{
echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
echo "<script>alert('[ERROR] Ingrese un prefijo válido.')</script>";
header("Refresh: 0; URL=http://127.0.0.1/proyectox/aplicacion.php");
}
?>
