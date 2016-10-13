<?php

	/**
	* Autor: Camilo Figueroa
	* 
	*/

	include( "funciones.php" );
?>

<!-- Esto es para la tabla de vehiculos. -->

<html>
	<head>
		<title></title>
		
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>

	<body>

		<?php echo imprimir_menus(); ?>
		<br>

		<form action="guardar_datos.php" method="get">
			Placa:			<input type="text" name="dato1">
			Modelo:			<input type="text" name="dato2">
			Color:			<input type="text" name="dato3">
			Fecha ingreso:	<input type="text" name="dato4">
			Documento:		<?php echo traer_lista_informacion( "dato5", "tb_usuarios", "documento", "nombre_completo" ); ?>
			<input type="hidden" name="tabla" value="tb_vehiculos">
			<input type="hidden" name="total-campos" value="5">
			<input type="hidden" name="campos" value="placa, modelo, color, fecha_ingreso, documento">
			<input type="submit" value="Enviar">
		</form>

		<?php
			//Se pueden traer datos de una tabla usando algunos parámetros.
			echo traer_informacion( "tb_vehiculos", 0 ); //Trae los datos.
			echo "<br><br>Usuarios y sus veh&iacute;culos<br>";
			
			//Se pueden traer datos de múltiples tablas usando varios parámetros y jugando con el SQL.
			//En la mezcla de varias tablas no es aconsejable borrar. Por eso se usa el parámetro con -1;
			echo traer_informacion( "tb_vehiculos t1, tb_usuarios t2", -1, " t1.documento = t2.documento " ); //Trae los datos.
			echo "<br><br>Usuarios y sus veh&iacute;culos<br>";
			
			//Se pueden escoger los campos de múltiples tablas usando varios parámetros y jugando con el SQL.
			//En la mezcla de varias tablas no es aconsejable borrar. Por eso se usa el parámetro con -1;
			echo traer_informacion( "tb_vehiculos t1, tb_usuarios t2", -1, " t1.documento = t2.documento ", " t2.nombre_completo, t1.placa " ); 
		?>

	</body>
</html>