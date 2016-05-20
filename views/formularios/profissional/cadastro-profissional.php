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
	$exp = $_POST['exp'];
	$equip = $_POST['equip'];


	$include = include('classes.php');
	$profissional = new Profissional();

	$cadastrar = $profissional->Cadastrar($email, $password, $nome, $sobrenome, $cpf_cnpj, $tel, $cel, $exp, $equip);

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

	<label>CPF</label>
	<input type="number" name="cpf_cnpj">

	<label>Celular</label>
	<input type="number" name="cel">

	<label>Telefone</label>
	<input type="text" name="tel">

	<label>Experiencia</label>
	<input type="textarea" name="exp">

	<label>Experiencia</label>
	<textarea rows="4" cols="50" name="exp"></textarea> 

	<label>Equipamentos</label>
	<textarea rows="4" cols="50" name="equip"></textarea> 




	<input type="submit" name="cadastrar" value="Cadastrar">



</form>
</body>
</html>