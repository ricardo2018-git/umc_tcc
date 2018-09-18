<?
	session_start();
	require_once("db.class.php");

	class BuscaDisciplina{

		public function listarDisciplina(){
			try{
				$disciplina = array();	# Onde vai amarzenar as materias
				$conn = new db();		# Cria obj
				$PDO = $conn->Open();	# Abre conexao com bd

				# O select com inner join 
				$sql = "SELECT u.nome_usu, d.disciplina_dis, d.assunto_dis, d.titulo_dis, d.conteudo_dis, d.img_dis, d.rascunho_dis 
							FROM usuario as u 
								inner join disciplina as d 
									ORDER BY id_dis DESC";	

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