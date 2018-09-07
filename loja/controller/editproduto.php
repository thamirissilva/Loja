<?php
	include("../conexao/conexao.php");

	$id_produto = $_POST['id_produto'];
	$nome = $_POST['nome'];
	$preco =$_POST['preco'];
	$qntd = $_POST ['qntd'];
	//recebe o codigo do produto para alteração
	//$codigo = $_POST['codigo'];
	//resolver bug aqui

	//faz as alterações no produto pelo código recebido
	$editaproduto ="UPDATE tbprodutos SET nomeproduto='$nome', precoproduto = '$preco', qntdproduto = '$qntd' WHERE id_produto='$id_produto'";
  	$resultado_edita = mysqli_query($conn, $editaproduto);

  	header("Location:../view/viewprodutos.php");
?>
