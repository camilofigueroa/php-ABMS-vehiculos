<?php

	/**
	* Autor: Camilo Figueroa
	* 
	*/

	include( "funciones.php" );
?>

<!-- Esto es para la tabla de usuarios. -->

<html>
	<head>
		<title></title>
		
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>

	<body>

		<?php  echo imprimir_menus();  ?>
		<br>

		<form action="guardar_datos.php" method="get">
			Documento			<input type="text" name="dato1">
			Nombre	 			<input type="text" name="dato2">
			Fecha nacimiento	<input type="text" name="dato3">
			<input type="hidden" name="tabla" value="tb_usuarios">
			<input type="hidden" name="total-campos" value="3">
			<input type="hidden" name="campos" value="documento, nombre_completo, fecha_nacimiento">
			<input type="submit" value="Enviar">
		</form>

		<?php 
			echo traer_informacion( "tb_usuarios" ); //Trae los datos. 
		?>

	</body>
</html>