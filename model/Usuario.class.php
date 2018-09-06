<?php
	
	class Usuario{

		#Atributos
			private $id;
			private $rgm;
			private $nivel;
			private $nome;
			private $email;
			private $senha;
			#private $foto;
		#FIM Atributos

		#Método Construtor
			public function __construct($id, $rgm, $nivel, $nome, $email, $senha){
				$this->id    = $id;
				$this->rgm   = $rgm;
				$this->nivel = $nivel;
				$this->nome  = $nome;
				$this->email = $email;
				$this->senha = $senha;
				#$this->foto  = $foto;
			}
		#FIM Método Construtor
			
		#Métodos
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

			#public function getFoto(){
			#	return $this->foto;
			#}
		#FIM Métodos
	}
?>