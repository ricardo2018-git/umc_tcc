<?php

	require_once("../../../control/db.class.php");
	require_once("../../../model/getDisciplina.php");

	class visualizarDisciplina{

		public function listarDisciplina(){
			try{
				$disciplina = array();	# Onde vai amarzenar as materias
				$conn = new db();		# Cria obj
				$PDO = $conn->Open();	# Abre conexao com bd
				$id = 56;
				# O select com inner join 
				$sql = "select * 
							from usuario as u
								INNER JOIN disciplina as m
									ON u.id_usu = m.id_usu
										where id_dis = $id";

				$result = $PDO->Query($sql);	# Execulta a query e armazena na variavel.

				foreach($result as $key => $row){
					$disciplina[] = new getDisciplina(
						$row["id_dis"],
						$row["nome_usu"],
						$row["disciplina_dis"],
						$row["assunto_dis"],
						$row["titulo_dis"],
						$row["conteudo_dis"],
						$row["img_dis"],
						$row["staus_dis"],
						$row["data_dis"]
					);
				}
				return $disciplina;

			}catch(Exception $e){
				throw new Exception("Erro ao buscar disciplinas", 1);
			}
		}
	}
?>