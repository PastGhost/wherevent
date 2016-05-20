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

	$include = include('classes.php');

	//$usuario = new Usuario($email, $password, $nome, $sobrenome, $cpf_cnpj, $tel, $cel);
	$promotor = new Promotor();

	$cadastrar = $promotor->Cadastrar($email, $password, $nome, $sobrenome, $cpf_cnpj, $tel, $cel);

}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wherevent | Cadastro de Serviços</title>
</head>
<body>
<form method="POST" action="">

	<select>
	  <option value="garcom" name="garcom">Garçom</option>
	  <option value="seguranca" name="seg">Segurança</option>
	  <option value="dj" name="dj">DJ</option>
	</select>
	

	<input type="submit" name="cadastrar" value="Cadastrar">



</form>
</body>
</html>