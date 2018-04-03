<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- Inserindo arquivos -->
	<?php 
		include("../conexao.php"); 
		include("menu.php");

		//mostra informações do banco de todos os produtos
		$sql = "SELECT *FROM tbcliente";
		$consulta = mysqli_query($conn, $sql);
	?>

	<!-- Botão Novo Cliente -->
		<a href="viewnovocliente.php"> Novo Cliente </a>

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
</body>
</html>