<?php
	session_start();
	require_once('../model/Usuario.php');
	require_once('CrudDisciplina.php');
	require_once('../model/Disciplina.php');

	$obj = unserialize(base64_decode($_SESSION['user'])); // Descripitografo meu usuario de SESSAO
	echo $id = $obj->getId().'<br>';
	echo $_POST["disciplina"].'<br>';
	echo $_POST["assunto"].'<br>';
	echo $_POST["titulo"].'<br>';
	echo $_POST["conteudo"].'<br>';
	echo $_POST["file"].'<br>';
	#echo $_POST["professor"].'<br>';	# Com ele habilitado esta dando erro no php

	$disciplina = new CrudDisciplina();
	$disciplina->Cadastrar(new Disciplina(null, $id, $_POST["disciplina"], $_POST["titulo"], $_POST["assunto"], $_POST["conteudo"], $_POST["file"], 'p', null));

	#retorna usuario para tela de cadastro de disciplina
	header('Location:../view/home/professor/home.php?opcoesMenu=2&cadastrada=1');

?>