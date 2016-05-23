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
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet"/>
    <link href="../../../fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<form method="POST" action="">

<header>
	<div id="header-wrapper">
	    <div id="header" class="container">
	        <div id="logo">
				<a href="index.html"><img src="../../images/LOGO%20WHEREVENT.png"></a>
	        </div>
	    </div>
	</div>
</header>


<ul class="nav nav-pills nav-justified thumbnail setup-panel">
  <li class="active">
    <a href="#step-1">
    <h4 class="list-group-item-heading">Dados pessoais</h4>
    <p class="list-group-item-text">Preencha seus dados para contato</p></a>
  </li>

</ul>




<section>
<div class="container">
<div class="row">
    <div class="col-md-6">
    	<div class="col-xs-12">
    		<legend>Cadastro de Promotor</legend>
			<label>E-mail</label>
			<input type="email" name="email" class="form-control form-group">

			<label>password</label>
			<input type="password" name="pwd" class="form-control form-group">

			<label>Nome</label>
			<input type="text" name="nome" class="form-control form-group">

			<label>Sobrenome</label>
			<input type="text" name="sobrenome" class="form-control form-group">

			<label>CPF/CNPJ</label>
			<input type="number" name="cpf_cnpj" class="form-control form-group">

			<label>Celular</label>
			<input type="number" name="cel" class="form-control form-group">

			<label>Telefone</label>
			<input type="text" name="tel" class="form-control form-group">

			<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary btn-lg">
			</div>
	</div>
</div></div>
</section>
	



</form>

<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>