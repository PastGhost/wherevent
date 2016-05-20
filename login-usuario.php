<?php

	function login($email,$password) {
		$usuarios = json_decode(file_get_contents("users.json"));
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


<form method="POST" action="">
	<input type="text" name="email">
	<input type="text" name="password">
	<input type="submit" >
</form>