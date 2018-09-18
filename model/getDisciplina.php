<?php

	class getDisciplina{
		# Atributos
			private $nome_usu;
			private $disciplina;
			private $assunto;
			private $titulo;
			private $conteudo;
			private $img;
			private $rascunho;
		# FIM Atributos
		# Método construtor
			public function __construct($nome_usu, $disciplina, $assunto, $titulo, $conteudo, $img, $rascunho){
				$this->nome_usu			= $nome_usu;
				$this->disciplina 		= $disciplina;
				$this->assunto			= $assunto;
				$this->titulo			= $titulo;
				$this->conteudo			= $conteudo;
				$this->img 				= $img;
				$this->rascunho			= $rascunho;
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
			public function getRascunho(){
				return $this->rascunho; 
			}
		# FIM Métodos get
	}

?>