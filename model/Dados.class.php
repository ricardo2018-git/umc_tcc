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
			public function __construct($cpf, $endereco, $cep, $complemento, $cidade, $estado, $telefone, $sexo, $nac){
				$this->cpf 				= $cpf;
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
			public function getCpf(){
				return $this->nome;
			}

			public function getEndereco(){
				return $this->email;
			}

			public function getCep(){
				return $this->rgm;
			}

			public function getComplemento(){
				return $this->senha;
			}

			public function getCidade(){
				return $this->nome;
			}

			public function getEstado(){
				return $this->email;
			}

			public function getTelefone(){
				return $this->rgm;
			}

			public function getSexo(){
				return $this->senha;
			}

			public function getNac(){
				return $this->nac;
			}
		#FIM Métodos
	}

?>