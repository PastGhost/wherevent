<?php
	function login($email,$password) {
		$usuarios = json_decode(file_get_contents("dados_json/users.json"));
		$n = count($usuarios);
		$i = 0;
		while($email != $usuarios[$i]->email && $n > $i) $i++;
		if($i == $n) {
			$login =  false;
		} 
		else if($password == $usuarios[$i]->password) {
			session_start();
			$id_user = $usuarios[$i]->id;
			$_SESSION["id_user"] = $id_user;
			$login =  true;
		}
		return $login;
	}
	$logado = false;
	if(isset($_POST['password'])) {
		$password = $_POST['password'];
		$email = $_POST['email'];
		$logado = login($email,$password);
		if($logado) echo "Sucesso<br>";
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
	    <h4 class="list-group-item-heading">Log In</h4>
	    <p class="list-group-item-text">Preencha seus dados</p></a>
	  </li>
	</ul>
</header>

<section>
	<div class="container">
		<div class="row">
    		<div class="col-md-6">
    			<div class="col-xs-12">
				<form method="POST" action="">
					<label>E-mail</label>
					<input type="email" name="email" class="form-control form-group">

					<label>Password</label>
					<input type="password" name="pwd" class="form-control form-group">
				</form>

	<input type="submit" name="login" value="Login" class="btn btn-primary btn-lg">
	</div>
	</div></div></div>
</section>


</form>

<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
