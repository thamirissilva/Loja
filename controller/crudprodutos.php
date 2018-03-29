<?php 
	include("conexao.php");

	//recebe informações
	/*$nome = $_POST['nome'];
	$preco =$_POST['preco'];
	$qntd = $_POST ['qntd'];*/

	//mostra informações do banco de todos os produtos
	function visualizaprodutos (){
		$visualizaprodutos = mysqli_query ($conn, "SELECT * FROM tbprodutos");
		while($row = $visualizaprodutos -> fetch_assoc()){
			$codigo = $row ['id_produto'];
			$nome = $row ['nomeproduto'];
			$preco = $row ['precoproduto'];
			$qntd = $row ['qntdproduto'];
		}
			return $codigo;
			return $nome;
			return $preco;
			return $qntd;
		}
	
	//retorna quantidade total de produtos cadastrados
	function totalprodutos(){
		$visualizatotal = mysqli_query($conn, "SELECT * FROM tbProdutos");
		$total = mysqli_num_rows($visualizatotal);
	}

	//mostra informações do banco apenas do produto pesquisado pelo nome

	function pesquisaproduto($nome){
		$visualizaproduto = mysqli_query ($conn, "SELECT * FROM tbprodutos WHERE nomeproduto ='$nome'");
		while($row = $visualizaproduto -> fetch_assoc()){
			$codigo = $row ['id_produto'];
			$nome = $row ['nomeproduto'];
			$preco = $row ['precoproduto'];
			$qntd = $row ['qntdproduto'];
		}
			return $codigo;
			return $nome;
			return $preco;
			return $qntd;
		}
	
	
?>