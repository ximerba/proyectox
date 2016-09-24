<?php
	require_once 'conexion.php';
	$result = "";
	$row = null;
        $conexion = 'conexion.php';
	//$con = dbConnect();
	// If 'buscar' is in the array $_POST proceed to make the query.
	if (isset($_GET['numero'])) {
		// Create the query
		$sql = 'SELECT * FROM aplicacion WHERE numero = ?';
		// we have to tell the PDO that we are going to send values to the query
		$stmt = $conexion->prepare($sql);
		// Now we execute the query passing an array toe execute();
		$result = $stmt->execute(array($_GET['numero']));
		// Extract the values from $result
		$row = $stmt->fetch();
		/*
		$error = $stmt->errorInfo();
		echo $error[2];
		*/
		if (empty($row)) {
			$result = "No se encontraron resultados!!";
		}
	}
 ?>
