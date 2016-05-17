<?php
/**
* 
*/
class User
{
	function Cadastrar($email, $pwd)
	{
		$fileJson = file_get_contents('dadosJson/user.json');

		//Transformando Json em PHP
		$filePhp = json_decode($fileJson);

		//está pegando o ultimo 
		$final = end($filePhp);

		$id_user = $final->id + 1;

		//Criando um array com os dados do Input e tranformando-o em objeto para JSON
		$dadosCadastro = array("id"=>$id_user,"tipo"=>$tipo, "email"=>$email, "password"=>$password);

		//Inserindo o os dados do usuário na última posição do arquivo em php
		array_push($filePhp, $dadosCadastro);

		//Escrevendo o array dos dados do usuário no arquivo Json
		$writeFile = file_put_contents('dadosJson/user.json', json_encode($filePhp));
	}
}
class Promotor
{


	function Cadastrar($email, $password, $nome, $sobrenome, $cpf_cnpj, $tel, $cel)
	{
		$this->email = $email;
		$this->password = $password;
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->cpf_cnpj = $cpf_cnpj;
		$this->celular = $cel;
		$this->telefone = $tel;


		//Lendo arquivo Json
		$fileJson = file_get_contents('dadosJson/promotor.json');

		//Transformando Json em PHP
		$filePhp = json_decode($fileJson);

		//está pegando o ultimo 
		$final = end($filePhp);

		$id_promotor = $final->id + 1;

		//Criando um array com os dados do Input e tranformando-o em objeto para JSON
		$dadosCadastro = array("id"=>$id_promotor,"tipo"=>"promotor", "email"=>$email, "password"=>$password, "nome"=>$nome, "sobrenome"=>$sobrenome, "cpf_cnpj"=>$cpf_cnpj, "celular"=>$cel, "telefone"=>$tel);

		//Inserindo o os dados do usuário na última posição do arquivo em php
		array_push($filePhp, $dadosCadastro);

		//Escrevendo o array dos dados do usuário no arquivo Json
		$writeFile = file_put_contents('dadosJson/promotor.json', json_encode($filePhp));

	}
}

class Servicos
{
	public function Cadastrar()
	{

	}
}

class Profissional
{


	function Cadastrar($email, $password, $nome, $sobrenome, $cpf, $tel, $cel, $exp, $equip)
	{
		$this->email = $email;
		$this->password = $password;
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->cpf_cnpj = $cpf;
		$this->celular = $cel;
		$this->telefone = $tel;


		//Lendo arquivo Json
		$fileJson = file_get_contents('dadosJson/profissional.json');

		//Transformando Json em PHP
		$filePhp = json_decode($fileJson);

		//está pegando o ultimo 
		$final = end($filePhp);

		$id_profissional = $final->id + 1;

		//Criando um array com os dados do Input e tranformando-o em objeto para JSON
		$dadosCadastro = array("id"=>$id_profissional,"tipo"=>"profissional", "email"=>$email, "password"=>$password, "nome"=>$nome, "sobrenome"=>$sobrenome, "cpf"=>$cpf, "celular"=>$cel, "telefone"=>$tel, "exp"=>$exp, "equipamentos"=>$equip);

		//Inserindo o os dados do usuário na última posição do arquivo em php 
		array_push($filePhp, $dadosCadastro);

		//Escrevendo o array dos dados do usuário no arquivo Json
		$writeFile = file_put_contents('dadosJson/profissional.json', json_encode($filePhp));

	}


	
}
// Classe evento mudada para eventos/classe_evento.php

?>