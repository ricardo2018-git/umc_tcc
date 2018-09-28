<?php
	require_once("Conexao.php");
	require_once("../model/Disciplina.php"); # esta assim antes ../../../model/Disciplina.php


	Class CrudDisciplina{

		# Cadastrar
		public function Cadastrar($user){

			try{
				$conn = new Conexao();		# Cria um Obj
				$PDO = $conn->Open();		# Abre conexao
				
				# Pega parametros da class Disciplina
				$id_dis 	= $user->getId_dis();
				$id_usu 	= $user->getId_usu();
				$disciplina = $user->getDisciplina();
				$titulo 	= $user->getTitulo();
				$assunto 	= $user->getAssunto();
				$conteudo 	= $user->getConteudo();
				$img 		= $user->getImg();
				$status 	= 'p';
				$data 		= $user->getData();

				# Query SQL
				$sql = "INSERT INTO disciplina(id_dis, id_usu, disciplina_dis, titulo_dis, assunto_dis, conteudo_dis, img_dis, status_dis) 
							VALUES('".null."', '".$id_usu."', '".$disciplina."', '".$titulo."', '".$assunto."', '".$conteudo."', '".$img."', '".$status."')";

				# Executa a query
				$PDO->Query($sql);
			}catch(Exception $e){
				throw new Exception("Erro ao tentar cadastar Disciplina", 1);
			}
		}

		# Alterar
		# Listar
		public function Listar(){
			try{
				$dados = array();		# Cria um Array
				$conn = new Conexao();	# Cria Obj
				$PDO = $conn->Open();	# Abre conexao
				$sql = "SELECT * FROM disciplina";	# Query
				$result = $PDO->Query($sql);	# Executa query
				foreach($result as $key => $row){
					$dados[] = new Disciplina(
						$row['id_dis'],
						$row['id_usu'],
						$row['disciplina'],
						$row['titulo'],
						$row['assunto'],
						$row['conteudo'],
						$row['img'],
						$row['status'],
						$row['data']
					);
				}
				return $dados;	# Retorna os dados da query
			}catch(Exception $e){
				throw new Exception("Erro ao tentar listar", 1);
			}
		}
		# Excluir
	}
?>