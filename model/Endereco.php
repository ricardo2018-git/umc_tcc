<?php

	Class Endereco{
		# Atributos
			private $id_end;
			private $id_usu;
			private $endereco;
			private $complemento;
			private $cep;
			private $cidade;
			private $estado;
			private $telefone;
			private $cpf;
			private $nacionalidade;
		# FIM Atributos

		# Método Construtor 
			public function __construct($id_end, $id_usu, $endereco, $complemento, $cep, $cidade, $estado, $telefone, $cpf, $nacionalidade){
				$this->id_end  		  = $id_end;
				$this->id_usu  		  = $id_usu;
				$this->endereco 	  = $endereco;
				$this->complemento    = $complemento;
				$this->cep 			  = $cep;
				$this->cidade 		  = $cidade;
				$this->estado  		  = $estado;
				$this->telefone 	  = $telefone;
				$this->cpf  		  = $cpf;
				$this->nacionalidade  = $nacionalidade;
			}
		# Método Construtor

		# Métodos Get's
			public function getId_end(){
				return $this->id_end;
			}
			public function getId_usu(){
				return $this->id_usu;
			}
			public function getEndereco(){
				return $this->endereco;
			}
			public function getComplemento(){
				return $this->complemento;
			}
			public function getCep(){
				return $this->cep;
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
			public function getCpf(){
				return $this->cpf;
			}
			public function getNacionalidade(){
				return $this->nacionalidade;
			}
		#FIM Métodos Get's
	}
?>