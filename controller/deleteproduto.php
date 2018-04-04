<?php

	$id = filter_input(INPUT_GET,"id_produto");

	include("../conexao/conexao.php");

	if($conn) {
		$query = mysqli_query($conn, "delete from tbprodutos where id_produto='$id'");

		if($query){
			header("Location: ../view/viewprodutos.php");
		}
		else{
			die("Erro: " . mysqli_error($conn));
		}
	}

	else{
			die("Erro: " . mysqli_error($conn));
		}

?>

<!--

	//recebe codigo do produto que será excluido
	$codigo = $_POST['codigo'];

	//realiza a exclusão do produto selecionado
	$excluiproduto= "DELETE FROM tbprodutos where id_produto='$codigo'";
    $exclui = mysqli_query($conn , $excluiproduto);

    //retorna para a index
	header("../index.php");

-->