<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/materialize.css">

  <style type="text/css">
    h1.bv{
      text-align: center;
      font-family: verdana;
      font-weight: bold;
    }
    div.bv{
      /*padding = margem de dentro*/
      /*margin = margem de fora*/
      padding-top: 5%; 
      padding-bottom: 5%;
      padding-right: 1%;
      padding-left: 1%; 
      margin-top: 5%;
      margin-bottom: 5%;
      margin-right: 10%;
      margin-left: 10%;
      background-color: white;
      border-radius: 10px;
    }
  </style>

</head>


<body>
	

<!--
	Icones

  Tamanhos:
  tiny: 1rem
  small: 2rem
  medium: 4rem
  large: 6rem

 <i class="large material-icons">insert_chart</i> */

-->

	<?php 
	include("conexao/conexao.php");
  ?>

  <nav class="red darken-4">
  <ul>
    <li><a href="view/index.php"> Home </a></li>
    <li><a href="view/viewprodutos.php"> Produtos  </a></li>
    <li><a href="view/viewclientes.php"> Clientes </a></li>
    <li><a href="../model/pedidos.php"> Pedidos </a></li>
    <li><a href="../model/carrinho.php"> Carrinho</a></li>
  </ul>
  </nav>


  
  <div class="bv">
    <H1 class="bv">BEM VINDO(A) A LOJA VIRTUAL</H1>
  </div>



<footer class="page-footer red darken-4">
          <div class="container">
            <div class="row"
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
