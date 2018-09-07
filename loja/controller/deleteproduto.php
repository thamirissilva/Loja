<?php

	$id = filter_input(INPUT_GET,'id_produto');

	include("../conexao/conexao.php");

	if($conn) {
		$query = mysqli_query($conn, "delete from tbprodutos where id_produto= '$id'");
 		$exclui = mysqli_query($conn , $query);
		
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
