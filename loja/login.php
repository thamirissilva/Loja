<!-- na primeira linha usaremos o “action = open.php” para que o formulário repasse 
as informações para a página open.php -->

<form method="post" action="conn_login.php" id="formlogin" name="formlogin" >
<fieldset id="fie">
<legend>LOGIN</legend><br />
<label>NOME : </label>


<!-- o campo “name” dentro do input e importante, 
pois será ele que armazenará os dados digitados -->
<table>
<input type="text" name="login" id="login"  /><br />
<label>SENHA :</label>
<input type="password" name="senha" id="senha" /><br />
<input type="submit" value="LOGAR  "  />
</table>

</fieldset>
</form>