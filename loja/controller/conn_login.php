

<!-- ERRO -->


<?php 
// session_start inicia a sessão
//session_start();
include("../conexao/conexao.php");

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];

 
// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios
$result = mysqli_query("SELECT * FROM usuarios WHERE usuario='$login' AND senha='$senha'");

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */

if( ($result) > 0 )
{       //erro
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:../view/viewprodutos.php');
}
else{    //funcionando
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:../index.php');
   
  }
?>
