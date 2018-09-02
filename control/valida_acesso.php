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

	#declara var
	$rgmB = null;
	$senhaB = null;
	
	#Pega somente os dados necessarios do select
	foreach($dados as $key => $row){
		$rgmB   = $row['rgm_usu'];
		$senhaB = $row['senha_usu'];
	} 

	#Compara dados do usuario com o do banco
	$a = strcmp($rgm,$rgmB);
	$b = strcmp($senha,$senhaB);

	#Compara credenciais do usuario com o banco
	if($a == 0 && $b == 0){
		echo 'Usuario OK';
		# Iniciar Session AQUI !!!
	}else{
		header('Location: ../index.php?cadastro=3');
	}

?>