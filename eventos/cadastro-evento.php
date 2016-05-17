<?php

if(isset($_POST['nome']))	
{
	$nome = $_POST['nome'];
	$data = $_POST['data'];
	$local = $_POST['txtEnderecoinput'];
	$hr_inicio = $_POST['hr_inicio'];
	$hr_fim = $_POST['hr_fim'];
	$lat = $_POST['txtLatitude'];
	$lng = $_POST['txtLongitude'];
	$descricao = $_POST['descricao'];
	$tipo_evento = $_POST['tipo_evento'];
	$valor_evento = $_POST['valor_evento'];
	
	$include = include('classe_evento.php');
	$evento = new Evento();
	$cadastrar_evento = $evento->cadastrar_evento($nome, $data, $local, $lng, $lat, $descricao, $tipo_evento, $faixa_etaria, $valor_evento, $hr_inicio,$hr_fim);
	
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro | Wherevent</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="default.css">
	<link href="estilo.css" type="text/css" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="mapa.js"></script>
    <script type="text/javascript" src="jquery-ui.custom.min.js"></script>
</head>
    
    
<body>
    <div id="header-wrapper">
          <div id="header" class="container">
            <div id="logo">
			<a href="index.html"><img src="../images/LOGO%20WHEREVENT.png"></a>
            </div>
          </div>
        </div> 
    
    <form method="post" action="" class="form-horizontal col-md-10">
      
    <fieldset>
    <!-- Form Name -->
    <legend>Cadastre seu evento</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-2 control-label" for="textinput">Nome</label>  
      <div class="col-md-4">
      <input id="textinput" name="nome" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-2 control-label" for="Data">Data</label>  
      <div class="col-md-4">
      <input id="Data" name="data" type="date" placeholder="" class="form-control input-md">

      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label" for="textinput">Descrição</label>  
      <div class="col-md-4">
      <input id="Data" name="descricao" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label" for="textinput">Tipo de evento</label>  
      <div class="col-md-4">
      <input id="Data" name="tipo_evento" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>    

    <div class="form-group">
      <label class="col-md-2 control-label" for="textinput">Horário de inicio do evento</label>  
      <div class="col-md-4">
      <input id="Data" name="hr_inicio" type="time" placeholder="" class="form-control input-md">

      </div>
    </div>    

    <div class="form-group">
      <label class="col-md-2 control-label" for="Data">Horário de finalizção do evento</label>  
      <div class="col-md-4">
      <input id="Data" name="hr_fim" type="time" placeholder="" class="form-control input-md">
     </div>
    </div>
	
	 <div class="form-group">
      <label class="col-md-2 control-label" for="Data">Valor Evento</label>  
      <div class="col-md-4">
      <input id="Data" name="valor_evento" type="number" placeholder="" class="form-control input-md">

      </div>
    </div>
	
	 <input type="hidden" id="txtLatitude" name="txtLatitude" />
	<input type="hidden" id="txtLongitude" name="txtLongitude" />
	<input type="hidden" id="txtEnderecoinput" name="txtEnderecoinput" />
    </fieldset>
	
		<div id="wrapper">
			<div id="apresentacao">
				<fieldset>  
					<div class="campos">
						<label for="txtEndereco">Endereço:</label>
						<input type="text" id="txtEndereco" name="txtEndereco" />
						<input type="button" id="btnEndereco" name="btnEndereco" value="Mostrar no mapa" />
					</div>
					<div id="mapa"></div>
				</fieldset>
			</div>
		</div>

    <input type="submit">
    </form>
</body>
</html>