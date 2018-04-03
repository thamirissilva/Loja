<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Novo Cliente </h1>

	<form action="../controller/createcliente.php" method="POST">
		Nome:
			<input type="text" name="nome"/>
		<br/>
		Email:
			<input type="email" name="email">
		<br/>
		Telefone:
			<input type="text" name="fone">
		<br/>

		<input type="submit" name="Cadastrar">
	</form>
</body>
</html>