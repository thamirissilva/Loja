<?php
	//recebe codigo do produto que será excluido
	$codigo = $_POST['codigo'];

	//realiza a exclusão do produto selecionado
	 $excluiproduto= "DELETE FROM tbprodutos where id_produto='$codigo'";
     $exclui = mysqli_query($conn , $excluiproduto);
?>