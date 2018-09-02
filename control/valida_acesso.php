<?php
	
	#Permite usar atributos e metodos desta class
	require_once('../control/db.class.php');

	#Dados recebido do usuario
	$rgm = $_POST['log_rgm'];
	$senha = $_POST['log_senha'];

	$conn = new db();		#Chama conexao
	$PDO = $conn->Open();	#Abre a conexao

	#Consulta
	$sql = "SELECT * FROM usuario WHERE rgm_usu = '$rgm' AND senha_usu = '$senha' ";

	#Os dados do select será armazenados aqui
	$dados = array();
	
	#execulta query
	$dados = $PDO->Query($sql);

	var_dump($dados);
/*
	foreach($dados as $key => $row){
		$rgm   = $row['rgm_usu'];
		$nome  = $row['nome_usu'];
		$nivel = $row['nivel_usu'];
	}

	#Passando o resultado obtido p/ array
	foreach($result as $key => $row){
		$dados[] = new Usuario(
			$row['id_usu'],
			$row['nome'],
			$row['email']
		);
	}
*/
?>