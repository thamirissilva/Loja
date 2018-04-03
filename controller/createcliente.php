<?php

	include("../conexao.php");

	//recebe informações
	$nome = $_POST['nome'];
	$email =$_POST['email'];
	$fone = $_POST ['fone'];

	//cadastra no banco
	$cadastracliente ="INSERT INTO tbcliente(nomecliente, emailcliente, fonecliente) VALUES ('$nome', '$email', '$fone')";
	$cad_cliente = mysqli_query($conn, $cadastracliente);
	//incluir tratamento de erros aqui

	//retorna para a index
	header("../view/index.php");
	?>