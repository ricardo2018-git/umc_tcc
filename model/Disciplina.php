<?php

	Class Disciplina{
		# Atributos
			private $id_dis;
			private $id_usu;
			private $disciplina;
			private $titulo;
			private $assunto;
			private $conteudo;
			private $img;
			private $status;
			private $data;
		# FIM Atributos

		# Método Construtor 
			public function __construct($id_dis, $id_usu, $disciplina, $titulo, $assunto, $conteudo, $img, $status, $data){
				$this->id_dis  	  = $id_dis;
				$this->id_usu  	  = $id_usu;
				$this->disciplina = $disciplina;
				$this->titulo     = $titulo;
				$this->assunto 	  = $assunto;
				$this->conteudo   = $conteudo;
				$this->img  	  = $img;
				$this->status 	  = $status;
				$this->data  	  = $data;
			}
		# Método Construtor

		# Métodos Get's
			public function getId_dis(){
				return $this->id_dis;
			}
			public function getId_usu(){
				return $this->id_usu;
			}
			public function getDisciplina(){
				return $this->disciplina;
			}
			public function getTitulo(){
				return $this->titulo;
			}
			public function getAssunto(){
				return $this->assunto;
			}
			public function getConteudo(){
				return $this->conteudo;
			}
			public function getImg(){
				return $this->img;
			}
			public function getStatus(){
				return $this->status;
			}
			public function getData(){
				return $this->data;
			}
		#FIM Métodos Get's

		# Métodos Set's
			public function setId_dis($x){
				$this->id_dis = $x;
			}
			public function setId_usu($x){
				$this->id_usu = $x;
			}
			public function setDisciplina($x){
				$this->disciplina = $x;
			}
			public function setTitulo($x){
				$this->titulo = $x;
			}
			public function setAssunto($x){
				$this->assunto = $x;
			}
			public function setConteudo($x){
				$this->conteudo = $x;
			}
			public function setImg($x){
				$this->img = $x;
			}
			public function setStatus($x){
				$this->status = $x;
			}
			public function setData($x){
				$this->data = $x;
			}
		#FIM Métodos Set's
	}
?>