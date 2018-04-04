<?php  
	
	include("../conexao/conexao.php"); 

	//Validando a existência dos dados 
	if(isset($_POST["nome"]) 
	&& isset($_POST["email"]) 
	&& isset($_POST["telefone"])) { 

	if(empty($_POST["nome"])) {
		$erro = ("Campo nome obrigatório"); 
	}

	else if(empty($_POST["email"])) {
		$erro = ("Campo e-mail obrigatório"); 
	}

	else if(empty($_POST["telefone"])) {
		$erro = ("Campo telefone obrigatório"); 
	}

}   

else { 
	
	}

?>