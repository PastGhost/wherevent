<?php
	include('../../classes/classes_usuarios.php');
	
	$logado = true;
	
	if(isset($_POST['login'])) {

		$usuario = new User();
		$logado = false;
		$password = $_POST['pwd'];
		$email = $_POST['email'];
		$logado = $usuario->Login($email,$password);
	
		if($logado) {
	
			header("Location: http://wherevent.azurewebsites.net/views/dashboard/index.html");
	
		} 
		
		else {

			$logado = false;
			//echo '<script>alert("Erro ao logar")</script>';
	
		}
	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wherevent | Cadastro de Promotor</title>
	<meta charset="UTF-8">

	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<form method="POST" action="">


<header>
	<div id="header-wrapper">
	    <div id="header" class="container">
	        <div id="logo">
				<center></center><a href="http://wherevent.azurewebsites.net/"><img src="../images/LOGO%20WHEREVENT.png"></a></center>
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
				<?php
					if(!($logado)) echo '<p>Senha ou Email incorretos</p>';
				?>
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


</body>
</html>
