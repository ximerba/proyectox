<script>
			function validar_texto(e){
			tecla = (document.all) ? e.keyCode : e.which;
			//Tecla de retroceso para borrar, siempre la permite
			if (tecla==8){
				return true;
			}	  
			// Patron de entrada, en este caso solo acepta numeros
			patron =/[0-9]/;
			tecla_final = String.fromCharCode(tecla);
			return patron.test(tecla_final);
			}
		</script>
<style type="text/css"> 
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
form.aplicacion div input[type="text"], form.aplicacion div input[type="numeric"] { 
    border: 1px solid #DCDCDC; 
    float: right; 
    padding: 4px; 
} 
form.aplicacion div input[type="title"] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 5px solid #C6C6C6; 
    float: center; 
    font-weight: bold; 
    padding: 10px 20px;
}
form.aplicacion div input[type="submit"] { 
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
<form action="procesa.php" method="post" class="aplicacion"> 

	<fieldset>
	<legend>Ingresar datos de Cliente</legend>
	<table>
		<tr>
			<td>
				<div><label>Celular</label>
			</td>
			<td>
				09 <input required type="numeric" name="primer" onkeypress='return validar_texto(event)' maxlength=1 pattern=".{1}" title="Debe tener 1 número." size=1/> <input size=6 name="celular" type="numeric" required title="Debe tener 6 carácteres." onkeypress='return validar_texto(event)' maxlength=6 pattern=".{6}"/></div>
			</td>
		</tr>
		<tr>
			<td>
				<div><label>Nombre:</label>
			</td>
			<td>
				<input name="user" type="text" required title="Se necesita"/></div>
			</td>
		</tr>
		<tr>
			<td>
				<div><label>Apellido:</label>
			</td>
			<td>
				<input name="apellido" type="text" /></div>
			</td>
		</tr>
		<tr>
			<td>
				<div><label>Direcci&oacute;n:</label>
			</td>
			<td>
				<input name="direccion" type="text"/>
			</td>
		</tr>
		<tr>
			<td>
				<label>Lavado realizado:</label>
			</td>
			<td>
				<select name="lavadoL" required title="Se necesita.">
					<option value="Si">Si</option>
					<option value="No">No</option>
				</select>
			</td>
		</tr>
			<tr>
			<td>
				<label>SMS enviado:</label>
			</td>
			<td>
				<select name="smsL" required title="Se necesita">
					<option value="Si">Si</option>
					<option value="No">No</option>
				</select>
			</td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td>
				<input name="aplicacion" type="submit" value="Agregar"/>
			</td>
			<td>
				<input name="lista" type="reset" value="Limpiar"/>
			</td>
			<td>
				<input name="volver" type="button" onclick="history.back()" value="Volver"/>
			</td>			
		</tr>  
	</table>
	</fieldset>
</form>
<?php
	include('conexion.php');
	conectar(@$con);
	$resultado;
	$pepe=
	//$con = dbConnect();
	// Crea la query
	$sql = "SELECT * FROM usuarios";
	// Crea la query y asigna el resultado a una variable $resultado
	$resultado=mysql_query($sql,$con);
	// trae los resultados desde $resultado
	@$row = mysql_fetch_assoc($sql);
	//$rows = $resultado->fetchAll();


echo "
<html lang='es'>
    <head>
		<link rel=stylesheet href='../css/style01.css'>
		<!--tengo que ver como dejar igual el aspecto -->
	</head>
    <body>
    	<table border='1'>
		<thead>
			<tr>
				<th>Numero</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Direccion</th>
				<th>Lavado</th>
				<th>SMS</th>
				<th>SMS</th>
			</tr>
		</thead>
		<tbody>
		";
	/*	<td><a href='buscarUsuario.php?id=<?php echo $row['numero']; ?>'><?php echo $row['numero']; ?></a></td>*/
			//foreach (@$row as $new_row){
			//}
			//do
			echo"
			<tr>
				<td>".$row[0]."</td>
				
				<td>".$row[1]."</td>
				
				<td>".$row[2]."</td>
				
				<td>".$row[3]."</td>
				
				<td>".$row[4]."</td>
				
				<td>".$row[5]."</td>
		
				<td>".$row[6]."</td>
		
			</tr>
			";
			//}
			while (@$row = mysql_fetch_array(@$sql)); 
		echo "	</tbody>
				</table>";
		?>
		</body>
	
</html>
