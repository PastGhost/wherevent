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
	<meta charset="UTF-8">

	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="POST" action="">


<header>
	<div id="header-wrapper">
	    <div id="header" class="container">
	        <div id="logo">
				<center></center><a href="http://wherevent.azurewebsites.net/"><img src="../../images/LOGO%20WHEREVENT.png"></a></center>
	        </div>
	    </div>
	</div>

	<ul class="nav nav-pills nav-justified thumbnail setup-panel">
	  <li class="active">
	    <a href="#step-1">
	    <h4 class="list-group-item-heading">Dados pessoais</h4>
	    <p class="list-group-item-text">Preencha seus dados</p></a>
	  </li>
	  
	</ul>
</header>

<section>
	<div class="container">
		<div class="row">
    		<div class="col-md-6">
    			<div class="col-xs-12">
					<label>E-mail</label>
					<input type="email" name="email" class="form-control form-group">

					<label>Password</label>
					<input type="password" name="pwd" class="form-control form-group">
					<label>Nome</label>
					<input type="text" name="nome" class="form-control form-group">

					<label>Sobrenome</label>
					<input type="text" name="sobrenome" class="form-control form-group">

					<label>CPF</label>
					<input type="number" name="cpf_cnpj" class="form-control form-group">

					<label>Celular</label>
					<input type="number" name="cel" class="form-control form-group">

					<label>Telefone</label>
					<input type="text" name="tel" class="form-control form-group">

					

					<label>Experiencia</label>
					<textarea rows="4" cols="50" name="exp" class="form-control form-group"></textarea> 

					<label>Equipamentos</label>
					<textarea rows="4" cols="50" name="equip" class="form-control form-group"></textarea> 



	<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary btn-lg">
	</div>
	</div></div></div>
</section>


</form>

<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
