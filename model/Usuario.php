<?php

	Class Usuario{
		# Atributos
			private $id;
			private $rgm;
			private $nivel;
			private $nome;
			private $email;
			private $senha;
			private $foto;
			private $sexo;
			private $data;
		# FIM Atributos

		# Método Construtor 
			public function __construct($id, $rgm, $nivel, $nome, $email, $senha, $foto, $sexo, $data){
				$this->id    = $id;
				$this->rgm   = $rgm;
				$this->nivel = $nivel;
				$this->nome  = $nome;
				$this->email = $email;
				$this->senha = $senha;
				$this->foto  = $foto;
				$this->sexo  = $sexo;
				$this->data  = $data;
			}
		# Método Construtor

		# Métodos Get's
			public function getId(){
				return $this->id;
			}
			public function getRgm(){
				return $this->rgm;
			}
			public function getNivel(){
				return $this->nivel;
			}
			public function getNome(){
				return $this->nome;
			}
			public function getEmail(){
				return $this->email;
			}
			public function getSenha(){
				return $this->senha;
			}
			public function getFoto(){
				return $this->foto;
			}
			public function getSexo(){
				return $this->sexo;
			}
			public function getData(){
				return $this->data;
			}
		#FIM Métodos Get's
	}
?>