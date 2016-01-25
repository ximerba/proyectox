<style type='text/css'> 
*{ 
    font-size: 14px; 
} 
body{ 
background:#aaa; 
} 
form.registra { 
    background: none repeat scroll 0 0 #F1F1F1; 
    border: 1px solid #DDDDDD; 
    font-family: sans-serif; 
    margin: 0 auto; 
    padding: 20px; 
    width: 300px; 
    box-shadow:0px 0px 20px black; 
    border-radius:10px; 
} 
form.registra div { 
    margin-bottom: 15px; 
    overflow: hidden; 
} 
form.registra div label { 
    display: block; 
    float: left; 
    line-height: 25px; 
} 
form.registra div input[type='text'], form.registra div input[type='numeric'] { 
    border: 1px solid #DCDCDC; 
    float: right; 
    padding: 4px; 
} 
form.registra div input[type='title'] { 
    background: none repeat scroll 0 0 #DEDEDE; 
    border: 5px solid #C6C6C6; 
    float: center; 
    font-weight: bold; 
    padding: 10px 20px;
}
form.registra div input[type='submit'] { 
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


 <!DOCTYPE html>
<html lang="es">
    <head>
		<link rel=stylesheet href="../css/style01.css">
		<!--tengo que ver como dejar igual el aspecto -->
	</head>
    <body>
    	<table border="1">
		<thead>
			<tr>
				<th>Numero</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Direccion</th>
				<th>Lavado</th>
				<th>SMS</th>
			</tr>
		</thead>
		<tbody>
		/*<?php
			foreach ($rows as $row) {
		?>*/
			<tr>
				<td><a href="buscarUsuario.php?id=<?php echo $row['userid']; ?>"><?php echo $row['userid']; ?></a></td>
				<td><?php echo $row['numero']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['apellido']; ?></td>
				<td><?php echo $row['direccion']; ?></td>
				<td><?php echo $row['lavado']; ?></td>
				<td><?php echo $row['sms']; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</html>
