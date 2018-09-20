<?php
	
	Class getDisciplina{
		# Atributos
			private $nome_usu;
			private $disciplina;
			private $assunto;
			private $titulo;
			private $conteudo;
			private $img;
			private $staus_dis;
			private $data_dis;
		# FIM Atributos
		# Método construtor
			public function __construct($nome_usu, $disciplina, $assunto, $titulo, $conteudo, $img, $staus_dis, $data_dis){
				$this->nome_usu			= $nome_usu;
				$this->disciplina 		= $disciplina;
				$this->assunto			= $assunto;
				$this->titulo			= $titulo;
				$this->conteudo			= $conteudo;
				$this->img 				= $img;
				$this->staus_dis		= $staus_dis;
				$this->data_dis 		= $data_dis;
			}
		# FIM Método construtor
		# Métodos get
			public function getNome_usu(){
				return $this->nome_usu; 
			}
			public function getDisciplina(){
				return $this->disciplina; 
			}
			public function getAssunto(){
				return $this->assunto; 
			}
			public function getTitulo(){
				return $this->titulo; 
			}
			public function getConteudo(){
				return $this->conteudo; 
			}
			public function getImg(){
				return $this->img; 
			}
			public function getStaus_dis(){
				return $this->staus_dis; 
			}
			public function getData_dis(){
				return $this->data_dis; 
			}
		# FIM Métodos get
	}

?>