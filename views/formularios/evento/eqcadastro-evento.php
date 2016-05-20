<?php

if(isset($_POST['cadastrar_evento']))	
{
	$nome = $_POST['nome'];
	$data = $_POST['data'];
	$local = $_POST['local'];
	$duracao = $_POST['duracao'];
	$descricao = $_POST['descricao'];
	$tipo_evento = $_POST['tipo_evento'];
	$faixa_etaria = $_POST['faixa_etaria'];
	$valor_evento = $_POST['valor_evento'];

	$include = include('classes.php');
	$evento = new Evento();

	$cadastrar_evento = $evento->cadastrar_evento($nome, $data, $local, $time, $descricao, $tipo_evento, $faixa_etaria, $valor_evento);

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Wherevent | Cadastro de Evento</title>
</head>
<body>
<form method="POST" action="">

	<label>Nome</label>
	<input type="text" name="nome">

	<label>Data</label>
	<input type="number" name="data">
	
	<label>Local</label>
	<input type="text" name="local">

	<label>Duração</label>
	<input type="time" name="duracao">

	<label>Descrição</label>
	<input type="text" name="descricao">

	<label>Tipo de evento</label>
	<input type="text" name="tipo_evento">

	<label>Faixa Etária</label>
	<input type="number" name="faixa_etaria">

	<label>Valor</label>
	<input type="number" name="valor_evento">

	<input type="submit" name="cadastrar_evento" value="cadastrar_evento">

</form>
</body>
</html>