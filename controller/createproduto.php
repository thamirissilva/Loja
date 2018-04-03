<?php

	include("../conexao.php");

	//recebe informações
	$nome = $_POST['nome'];
	$preco =$_POST['preco'];
	$qntd = $_POST ['qntd'];

	//cadastra no banco
	$cadastraproduto ="INSERT INTO tbprodutos(nomeproduto, precoproduto, qntdproduto) VALUES ('$nome', '$preco', '$qntd')";
	$cad_produto = mysqli_query($conn, $cadastraproduto);
	//incluir tratamento de erros aqui

	//retorna para a index
	header("../view/index.php");
	?>