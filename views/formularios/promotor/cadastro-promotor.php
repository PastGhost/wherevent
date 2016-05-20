<?php

if(isset($_POST['cadastrar']))	
{
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$cpf_cnpj = $_POST['cpf_cnpj'];
	$tel = $_POST['tel'];
	$cel = $_POST['cel'];

	$include = include('../../../classes/classes_usuarios.php');

	$promotor = new Promotor();
	$cadastrar = $promotor->Cadastrar($email, $password, $nome, $sobrenome, $cpf_cnpj, $tel, $cel);
	

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Wherevent | Cadastro de Promotor</title>
</head>
<body>
<form method="POST" action="">

	<label>E-mail</label>
	<input type="email" name="email">

	<label>password</label>
	<input type="password" name="pwd">
	<label>Nome</label>
	<input type="text" name="nome">

	<label>Sobrenome</label>
	<input type="text" name="sobrenome">

	<label>CPF/CNPJ</label>
	<input type="number" name="cpf_cnpj">

	<label>Celular</label>
	<input type="number" name="cel">

	<label>Telefone</label>
	<input type="text" name="tel">

	

	<input type="submit" name="cadastrar" value="Cadastrar">



</form>
</body>
</html>