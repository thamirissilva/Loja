<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>

   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../css/materialize.css">
   <meta name="viewport" content="width=device-width, inicial-scale=1.0">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
	
	<style type="text/css">
			main{
				background-color: white;
				/*opacity: 0.9;*/
				height: 100%;
				margin-left:1%;
				margin-right:1%;
				padding-left: 1%;
				padding-right: 1%;
				border-radius: 10px;			
			}
	</style>
 
 

	<div>	

	<!-- Inserindo arquivos -->
	<?php 
		include("../conexao/conexao.php"); 
		include("menu.php");

		//mostra informações do banco de todos os produtos
		$sql = "SELECT *FROM tbprodutos";
		$consulta = mysqli_query($conn, $sql);
	?>
</div>


<main>
	
<div class="row">
		
		<br>
		<div>
		<!-- Botão Novo Produto -->
		<a href="viewnovoproduto.php" class="botao"> Novo Produto </a>
		</div>

		<br>
		<br>

<div class="tabela">
	<style type="text/css">
		div .tabela td{
			font-family: verdana;
			color: #900;
		}
	</style>
		
	<!-- Tabela Produtos -->
	<?php
		echo "<table>";
			echo "<tr>";
				echo "<td> Produto </td>";
				echo "<td> Preço </td>";
				echo "<td> Quantidade </td>";
				echo "<td> Ações </td>";
			echo "</tr>";
			
			//laço que recebe os produtos
			while($registro = mysqli_fetch_assoc($consulta)){
				echo "<tr>";
					//informações dos produtos
					echo "<td>".$registro['nomeproduto']."</td>";
					echo "<td>".$registro['precoproduto']."</td>";
					echo "<td>".$registro['qntdproduto']."</td>";

					//botões edita e exclui por linha do produto estão na mesma td
					echo "<td><a href='vieweditaproduto.php?'> Editar </a> &nbsp";
					echo "<a href='../controller/deleteproduto.php'> Excluir </a></td>";
					echo "</tr>";
				}
			
		echo "</table>";
?>
		</div>

	</div>

</main>
<br>

<footer class="page-footer red darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Sobre Nós</h5>
                <p class="grey-text text-lighten-4">TEXTO</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          	
            <div class="container">
            © 2018 Copyright
            </div>
         <br>
        </footer>
            
</body>
</html>