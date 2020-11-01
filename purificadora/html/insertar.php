<?php
    //Conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die ("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("aquaclyva", $link) or die ("<h2>Error de conexion</h2>");
	
	//Obtenemos los valores del formulario
	$nombre = $_POST['nombrecliente'];
	$direccion = $_POST['direccioncliente'];
	$telefono = $_POST['telefonocliente'];
	$producto = $_POST['productocliente'];
	$cantidad = $_POST['cantidadcliente'];
	
	//ingresar la informacion en la tabla pedidos
	mysql_query("INSERT INTO pedidos VALUES ('','$nombre','$direccion','$telefono','$producto','$cantidad')",$link) or die("<h2>  Error de conexion</h2>");
	
?>