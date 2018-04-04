<?php

	$id = filter_input(INPUT_GET,"id_cliente");

	include("../conexao/conexao.php");

	if($conn) {
		$query = mysqli_query($conn, "delete from tbcliente where id_cliente='$id'");
		if($query){
			header("Location: ../view/viewclientes.php");
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
	include("../conexao/conexao.php");

	if (getenv("REQUEST_METHOD") == "GET") {
    // Configura as variáveis do método POST para virarem variáveis
    // "normais" do PHP (Requer apenas nas versões do PHP acima da 4.1)
    $codigo = $_GET['codigo'];

	//tirar espaço em branco das variaveis recebidass através de formulario
	$codigo = trim($codigo);

	//realiza a exclusão do cliente selecionado
	$del = "DELETE FROM tbcliente WHERE id_cliente = '$codigo'";
    $exclui = mysqli_query($conn , $del);

    echo "<h1>O PRODUTO foi excluido!</h1>";
	echo "<br><a href=\"../index.php\">Voltar</a>";
 }

-->
