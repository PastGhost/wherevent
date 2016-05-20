<?php
/**
* 
*/
class User
{

	public $id_user;
	public $email;
	public $password;

	function Cadastrar($email, $password, $tipo)
	{

		$this->email = $email;
		$this->password = $password;
		
		$fileJson = file_get_contents('../dados_json/user.json');

		//Transformando Json em PHP
		$filePhp = json_decode($fileJson);

		//está pegando o ultimo 
		$final = end($filePhp);

		$this->id_user = $final->id + 1;

		//Criando um array com os dados do Input e tranformando-o em objeto para JSON
		$dadosCadastro = array("id"=>$this->id_user,"tipo"=>$tipo, "email"=>$this->email, "password"=>$this->password);


		//Inserindo o os dados do usuário na última posição do arquivo em php
		array_push($filePhp, $dadosCadastro);

		//Escrevendo o array dos dados do usuário no arquivo Json
		$writeFile = file_put_contents('../dados_json/user.json', json_encode($filePhp));

		return $this->id_user;
	}

}
class Promotor
{

	function Cadastrar($email, $password, $nome, $sobrenome, $cpf_cnpj, $tel, $cel)
	{
		$tipo = "promotor";
		$user = new User();
		$id_user = $user->Cadastrar($email, $password, $tipo);



		//Lendo arquivo Json
		$fileJson = file_get_contents('../promotor.json');

		//Transformando Json em PHP
		$filePhp = json_decode($fileJson);

		//está pegando o ultimo 
		$final = end($filePhp);

		$id_promotor = $final->id + 1;

		//Criando um array com os dados do Input e tranformando-o em objeto para JSON
		$dadosCadastro = array("id"=>$id_promotor, "nome"=>$nome, "sobrenome"=>$sobrenome, "cpf_cnpj"=>$cpf_cnpj, "celular"=>$cel, "telefone"=>$tel, "user_id"=>$id_user);	

		//Inserindo o os dados do usuário na última posição do arquivo em php
		array_push($filePhp, $dadosCadastro);

		//Escrevendo o array dos dados do usuário no arquivo Json
		$writeFile = file_put_contents('../dados_json/promotor.json', json_encode($filePhp));
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
		$fileJson = file_get_contents('../dados_json/profissional.json');

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
		$writeFile = file_put_contents('../dados_json/profissional.json', json_encode($filePhp));

	}


	
}



?>