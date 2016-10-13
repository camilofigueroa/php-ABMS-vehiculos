<?php

    /**
	* Autor: Camilo Figueroa
	* 
	*/
    
    include( "funciones.php" );
    include( "config.php" );
    
    $tabla = "";
    $llave_primaria_tabla = "";
    $id_o_valor_llave_primaria = "";
    
    echo imprimir_menus();
    echo "<br>";

    //Si el nombre de la tabla se ha suministrado y el valor del campo para borrar, entonces se proceder� a operar.
    if( isset( $_GET[ 'tabla' ] ) && isset( $_GET[ 'id' ] ) )
    {
        $tabla = $_GET[ 'tabla' ]; //Hay que traer la tabla para poder hacer el borrado.
        $id_o_valor_llave_primaria = $_GET[ 'id' ]; //hay que trae el valor del campo que permitir� hacer el borrado.
        
        //Aqu� se extrae el nombre del campo o llave primaria que permitir�, para este caso, hacer el borrado.
        //En otros casos el borrado puede depender de otros valores.
        $llave_primaria_tabla = retornar_dato_tabla( "INFORMATION_SCHEMA.COLUMNS", "COLUMN_NAME", " TABLE_SCHEMA = '$bd' AND TABLE_NAME = '$tabla' AND COLUMN_KEY = 'PRI' " );
        
        echo borrar_datos( $tabla, " $llave_primaria_tabla = '$id_o_valor_llave_primaria' " );
    }
    
    

