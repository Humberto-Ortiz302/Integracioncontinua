<?php
	
	require_once "conexion.php";
	$conexion=conexion();
	$f=date("Y-m-d", strtotime($_POST['fechaCobro']));    	
	$c=$_POST['canal']; 
	$e=$_POST['estado']; 
	$p=date("Y-m-d", strtotime($_POST['posiblepago']));  
	$i=$_POST['mora_id']; 
	$r=$_POST['respuesta'];
	

	//$f=date('%d/%m/%Y', strtotime($fecha));

	$sql="INSERT IGNORE INTO registro (fechaCobro,canal,estado,posiblepago,mora_id,respuesta)
								values ('$f ', '$c', '$e', '$p','$i','$r')";
	$guardar =  mysqli_query($conexion,$sql);

	echo $guardar;
?> 