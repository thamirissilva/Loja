<!DOCTYPE html>
<html>
<head>
	<title>Novo Cliente</title>

	<!-- Fontes do google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta name="viewport" content="width=device-width, inicial-scale=1.0">

</head>
<body>
	
<nav class="red darken-4">
	<ul>
		<li><a href="../index.php"> Home </a></li>
		<li><a href="viewprodutos.php"> Produtos  </a></li>
		<li><a href="viewclientes.php"> Clientes </a></li>
		<li><a href="../model/pedidos.php"> Pedidos </a></li>
		<li><a href="../model/carrinho.php"> Carrinho</a></li>
	</ul>
</nav>


<main>

<div>
	<!-- Formulário de clientes -->

	<form action="../controller/createcliente.php" method="POST" class="form">

		<h1> Novo Cliente </h1>

		Nome:
			<input type="text" name="nome"/>
		<br/>
		Email:
			<input type="email" name="email">
		<br/>
		Telefone:
			<input type="text" name="fone">
		<br/>

		<button class="botao">Cadastrar</button>
	</form>
</div>

</main>

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