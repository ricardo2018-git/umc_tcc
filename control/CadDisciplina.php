<?php
	session_start();
	require_once("../model/Usuario.php");
	#require_once("CrudDisciplina.php");
	#require_once("../model/Disciplina.php");
	$obj = unserialize(base64_decode($_SESSION['user'])); // Descripitografo meu usuario de SESSAO
	echo $id = $obj->getId().'<br>';
	echo $_POST["disciplina"].'<br>';
	echo $_POST["assunto"].'<br>';
	echo $_POST["titulo"].'<br>';
	echo $_POST["conteudo"].'<br>';
	#echo $id = $obj->getId();

	class CadDisciplina{

		public function Parametro(){
			try{
				$disciplina = new CrudDisciplina();	# Cria Obj
				
				$disciplina->Cadastro(new Disciplina(null, $id, $_POST["disciplina"], $_POST["assunto"], $_POST["titulo"], $_POST["conteudo"], null));	# Estou passando img como null mas tenho q arrumar isto
			}catch(Exception $e){
				#header('Location:');
			}
		}
	}
?>