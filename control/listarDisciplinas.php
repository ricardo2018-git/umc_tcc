<?php
	
	require_once("../../../control/db.class.php");
	require_once("../../../model/getDisciplina.php");

	class BuscaDisciplina{

		public function listarDisciplina(){
			try{
				$disciplina = array();	# Onde vai amarzenar as materias
				$conn = new db();		# Cria obj
				$PDO = $conn->Open();	# Abre conexao com bd

				# O select com inner join 
				$sql = "select * 
							from usuario as u
								INNER JOIN disciplina as m
									ON u.id_usu = m.id_usu
										";	

				$result = $PDO->Query($sql);	# Execulta a query e armazena na variavel.

				foreach($result as $key => $row){
					$disciplina[] = new getDisciplina(
						$row["nome_usu"],
						$row["disciplina_dis"],
						$row["assunto_dis"],
						$row["titulo_dis"],
						$row["conteudo_dis"],
						$row["img_dis"],
						$row["rascunho_dis"]
					);
				}
				return $disciplina;

			}catch(Exception $e){
				throw new Exception("Erro ao buscar disciplinas", 1);
			}
		}
	}
?>