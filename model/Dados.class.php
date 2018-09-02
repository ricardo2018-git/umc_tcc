<?php

	class Dados{
		#Atributos
		 	private $id_end;
			private $id_usu;
			private $cpf;
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
			public function __construct($id_end, $id_usu, $cpf, $endereco, $cep, $complemento, $cidade, $estado, $telefone, $sexo, $nac){
				$this->id_end 			= $id_end;
				$this->id_usu			= $id_usu;
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
			public function getId_end(){
				return $this->id_end;
			}

			public function getId_usu(){
				return $this->id_usu;
			}

			public function getCpf(){
				return $this->cpf;
			}

			public function getEndereco(){
				return $this->endereco;
			}

			public function getCep(){
				return $this->cep;
			}

			public function getComplemento(){
				return $this->complemento;
			}

			public function getCidade(){
				return $this->cidade;
			}

			public function getEstado(){
				return $this->estado;
			}

			public function getTelefone(){
				return $this->telefone;
			}

			public function getSexo(){
				return $this->sexo;
			}

			public function getNac(){
				return $this->nac;
			}
		#FIM Métodos
	}

?>