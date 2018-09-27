<?php
	require_once("CrudDisciplina.php");
	require_once("../model/Disciplina.php");

	try{
		$disciplina = new CrudDisciplina();	# Cria Obj
		$disciplina->Cadastro(new Disciplina(null, $_POST["disciplina"], $_POST["assunto"], $_POST["titulo"], $_POST["conteudo"], null));	# Estou passando img como null mas tenho q arrumar isto
	}catch(Exception $e){
		#header('Location:');
	}

?>