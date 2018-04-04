<!DOCTYPE html>
<html>
<head>
	<title>Editar Produto</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link type="text/css" rel="stylesheet" href="../css/materialize.css"/>
	<meta name="viewport" content="width=device-width, inicial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>

<body>
	<!-- Formulário para edição de produtos -->
	<?php

		//recebe codigo 
		//$codigo = $_GET['codigo'];

		include("../conexao/conexao.php"); 
		include("menu.php");

		//puxa informações do banco WHERE id_produto = '$codigo'
		$sql = "SELECT *FROM tbprodutos ";
		$consulta = mysqli_query($conn, $sql);

		while($registro = mysqli_fetch_assoc($consulta)){
	?>
	<!-- Formuário que edita -->
	<form action="../controller/editproduto.php" method="POST" class="form">
		<h2> Cadastro de Produtos </h2>

		Nome:  
			<input type="text" name="nome" value="<?php echo $registro['nomeproduto']; ?>" />  <br/>
		Preço: 
			<input type="text" name="preco" value="<?php echo $registro['precoproduto']; ?>"> <br/>
		Quantidade:
			<input type="number" name="qntd" value="<?php echo $registro['qntdproduto']; ?>"> <br/>
			<?php 
		}
		?>
		<br/>

		<button class="botao">Concluir</button>

	</form>
	</div>

<br>
<br>
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