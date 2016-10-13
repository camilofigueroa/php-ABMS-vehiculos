<?php

	/**
	* Autor: Camilo Figueroa
	* 
	*/

	include( "funciones.php" );
?>

<!-- Esto es para la tabla de usuarios. -->

<!--	En este archivo se podría colocar una imagen de presentación, o lo incial de un sitio.
		Hay que recordar que el php se puede mezclar, o embeber ( técnicamente es el término ) en el html. Sin embargo no es
		aconsejable que grandes cantidades de código php estén en el html, esto por orden y estética del código.	-->

<html>
	<head>
		<title></title>
		
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>

	<body>

		<?php  echo imprimir_menus(); ?>
		
		<br><br>
		
		<?php
			echo "Usuarios registrados en el sistema: ".retornar_dato_tabla( "tb_usuarios", "COUNT( * )" )."<br>";
			echo "Veh&iacute;culos registrados en el sistema: ".retornar_dato_tabla( "tb_vehiculos", "COUNT( * )" )."<br>";
		?>

	</body>
</html>