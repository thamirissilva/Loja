<?php

	//ver depois se esse se encaixa aqui
	//include("../conexao/conexao.php");

	//recebe codigo do produto que será excluido
	$codigo = $_POST['codigo'];

	//realiza a exclusão do produto selecionado
	$excluiproduto= "DELETE FROM tbprodutos where id_produto='$codigo'";
    $exclui = mysqli_query($conn , $excluiproduto);

    //retorna para a index
	header("../index.php");
?>