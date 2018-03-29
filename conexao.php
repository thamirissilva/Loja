<?php
	/* realiza conexão com o banco */
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname= "bdlojavirtual";


	$conn = mysqli_connect($servidor,$usuario, $senha, $dbname);

	
	if (!$conn){
		die("Falha na conexão:" .mysqli_connect_error());
	} else {
		
	}
?>