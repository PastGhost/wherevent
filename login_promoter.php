<?php
	function login($email,$password) {
		$usuarios = json_decode(file_get_contents("user.json"));
		$n = count($usuarios);
		$i = 0;
		while($email != $usuarios[$i]->email && $n > $i) $i++;
		if($i == $n) $login =  false;
		else if($password == $usuarios[$i]->password) {
			session_start();
			$id_user = $usuarios[$i]->id;
			$_SESSION["id_user"] = $id_user;
			$login =  true;
		}
		return $login;
	}
?>