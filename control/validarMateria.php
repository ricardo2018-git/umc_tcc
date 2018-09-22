<?php

	require_once("db.class.php");

	# Recebe id da materia que vai ser validada..
	$idMateria = $_GET['id'];

	#class validaMateria{

		try{
			$conn = new db();		# Obj
			$PDO = $conn->Open();	# Abre conexao
			$sql = "UPDATE disciplina SET staus_dis = 'a' WHERE id_dis = $idMateria";		# Query que altera a materia para aprovada
			$PDO->Query($sql);		# Execulta a query
			$conn = null;			# Fecha conexao
			echo 'Materia Aprovada com sucesso!!!';
		}catch(Exception $e){
			throw new Exception("Erro ao tentar validar Materia", 1);	# Caso de erro
		}
	#}

?>