<?php
class Evento
{


	function cadastrar_evento($nome, $data, $local, $lng, $lat, $descricao, $tipo_evento, $hr_inicio,$hr_fim)
	{

		//Lendo arquivo Json
		$fileJson = file_get_contents('evento.json');

		//Transformando Json em PHP
		$filePhp = json_decode($fileJson);

		$final = end($filePhp);

		$id = $final->id + 1;
		
		//Criando um array com os dados do Input e tranformando-o em objeto para JSON
		$dadosCadastro_evento= array("id"=>$id, "nome"=>$nome, "data"=>$data, "local"=>$local,"lng"=>$lng, "lat"=>$lat, "descricao"=>$descricao, "tipo_evento"=>$tipo_evento, "valor_evento"=>$valor_evento,"hr_inicio"=>$hr_inicio, "hr_fim"=>$hr_fim );

		

		//Inserindo o os dados do usuário na última posição do arquivo em php
		array_push($filePhp, $dadosCadastro_evento);
		//Escrevendo o array dos dados do usuário no arquivo Json
		$writeFile = file_put_contents('evento.json', json_encode($filePhp));

		

	}
}
?>