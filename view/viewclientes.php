<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link type="text/css" rel="stylesheet" href="../css/materialize.css"/>
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
		$sql = "SELECT *FROM tbcliente";
		$consulta = mysqli_query($conn, $sql);
	?>
</div>

<main>
	
<div class="row">
		
	<br>
	<div>
	 <!-- Botão Novo Cliente -->
		<a href="viewnovocliente.php" class="botao"> Novo Cliente </a>
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

	<!-- Tabela Clientes -->
	<?php
		echo "<table>";
			echo "<tr>";
				echo "<td> Nome </td>";
				echo "<td> Email </td>";
				echo "<td> Telefone </td>";
				echo "<td> Ações </td>";
			echo "</tr>";
			//laço que recebe os cliente
				while($registro = mysqli_fetch_assoc($consulta)){
					echo "<tr>";
						//informações dos clientes
						echo "<td>".$registro['nomecliente']."</td>";
						echo "<td>".$registro['emailcliente']."</td>";
						echo "<td>".$registro['fonecliente']."</td>";

						//botões edita e exclui por linha do cliente estão na mesma td
						echo "<td><a href='vieweditacliente.php?'> Edita</a> &nbsp";
						echo "<a href='../controller/deletecliente.php'> Exclui</a></td>";
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