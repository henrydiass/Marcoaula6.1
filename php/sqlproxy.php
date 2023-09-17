<?php  
	$domain="localhost";
	$user="root";		
	$password="";		
	$database="loja";	

	
	$mysqli = new mysqli($domain,$user,$password,$database);
	$mysqli->set_charset("utf8");  
	
	if($mysqli->connect_errno){
		echo "Não foi possível conectar com o banco de dados ";
		echo $mysqli->connect_error; 
	} 
?>