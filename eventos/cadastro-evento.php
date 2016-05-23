<?php

if(isset($_POST['nome']))	
{
	$nome = $_POST['nome'];
	$data = $_POST['data'];
	$local = $_POST['txtEnderecoinput'];
	$lat = $_POST['txtLatitude'];
	$lng = $_POST['txtLongitude'];
	$descricao = $_POST['descricao'];
	$tipo_evento = $_POST['tipo_evento'];
	$hr_inicio = $_POST['hr_inicio'];
	$hr_fim = $_POST['hr_fim'];
	
	$include = include('classe_evento.php');
	$evento = new Evento();
	$cadastrar_evento = $evento->cadastrar_evento($nome, $data, $local, $lng, $lat, $descricao, $tipo_evento, $hr_inicio,$hr_fim);
	
}


?>
<!DOCTYPE html>
<html>
<head>

    <title>Mapa | Wherevent</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="estilo.css" type="text/css" rel="stylesheet" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
</head>
<body>

    <div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
            <a href="index.html"><img src="../views/images/LOGO%20WHEREVENT.png"></a>
			</div>
			<div id="menu">
				<ul>
					<li><a href="formulario-evento.html">Cadastre seu evento</a></li>
					<!--<li><a href="#" accesskey="3" title="" class="icon icon-key">LOGIN</a></li>-->
				</ul>
			</div>
		</div>
    </div>
    <div id="line-blank"> </div>

    <div id="mid">  
		<h2>Cadastro Realizado com sucesso</h2>
		<div class="row"> 
			<div class="column6"> 
				<a href="mapa_eventos.html" class="button">Abrir Mapa</a>
			</div>
		</div>		
    </div>
    
</body>
</html>
