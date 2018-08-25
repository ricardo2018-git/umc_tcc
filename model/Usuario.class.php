<?php
	
	class Usuario{

		#Atributos
			#private $id;
			private $nome;
			private $email;
			private $rgm;
			private $senha;
			#private $foto;
		#FIM Atributos

		#Método Construtor
			public function __construct($nome, $email, $rgm, $senha){
				$this->nome  = $nome;
				$this->email = $email;
				$this->rgm   = $rgm;
				$this->senha = $senha;
				#$this->foto  = $foto;
			}
		#FIM Método Construtor
			
		#Métodos
			public function getId(){
				return $this->id;
			}

			public function getNome(){
				return $this->nome;
			}

			public function getEmail(){
				return $this->email;
			}

			public function getRgm(){
				return $this->rgm;
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