<?php

	class Dados{
		#Atributos
			private $cpf;
			private $confirma_senha;
			private $endereco;
			private $cep;
			private $complemento;
			private $cidade;
			private $estado;
			private $telefone;
			private $sexo;
			private $nac;
		#FIM Atributos

		#Método construtor
			public function __construct($cpf, $confirma_senha, $endereco, $cep, $complemento, $cidade, $estado, $telefone, $sexo, $nac){
				$this->cpf 				= $cpf;
				$this->confirma_senha	= $confirma_senha;
				$this->endereco			= $endereco;
				$this->cep 				= $cep;
				$this->complemento		= $complemento;
				$this->cidade 			= $cidade;
				$this->estado			= $estado;
				$this->telefone			= $telefone;
				$this->sexo 			= $sexo;
				$this->nac 				= $nac;
			}
		#FIM Método construtor

		#Métodos

		#FIM Métodos
	}

?>