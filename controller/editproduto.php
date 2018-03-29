<?php
	include("../conexao.php");

	$nome = $_POST['nome'];
	$preco =$_POST['preco'];
	$qntd = $_POST ['qntd'];
	//recebe o codigo do produto para alteração
	//$codigo = $_POST['codigo'];
	//resolver bug aqui

	//faz as alterações no produto pelo código recebido
	$editaproduto ="UPDATE tbProdutos SET nomeProduto='$nome', precoproduto = '$preco', qntdproduto = '$qntd'";
  	$resultado_edita = mysqli_query($conn, $editaproduto);
?>