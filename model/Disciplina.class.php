<?php

	class Disciplina{
		# Atributos
			private $id;
			private $id_pro;
			private $disciplina;
			private $assunto;
			private $titulo;
			private $conteudo;
			private $img;
			private $rascunho;
		# FIM Atributos

		# Método construtor
			public function __construct($id, $id_pro, $disciplina, $assunto, $titulo, $conteudo, $img, $rascunho){
				$this->id 			= $id;
				$this->id_pro 		= $id_pro;
				$this->disciplina 	= $disciplina;
				$this->assunto		= $assunto;
				$this->titulo		= $titulo;
				$this->conteudo		= $conteudo;
				$this->img 			= $img;
				$this->rascunho		= $rascunho;
			}
		# FIM Método construtor

		# Métodos get
			public function getId(){
				return $this->id; 
			}
			public function getId_pro(){
				return $this->id_pro; 
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