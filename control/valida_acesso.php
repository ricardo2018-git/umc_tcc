<?php
	
	#Permite usar atributos e metodos desta class
	require_once('../control/db.class.php');
	require_once('../control/registraUsuario.class.php');

	$u = new Registra();

	$cont = 0;

	foreach ($u->Listar() as $key => $obj){
		if($_POST["log_rgm"] == $obj->getRgm && $_POST["log_senha"] == $obj->getSenha){
			$cont++;
			break;
		}
	}

	if($cont > 0){
		echo 'já esta registrado novo';
	}else{
		echo 'não esta registrado novo';
	}

/*
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
		$nivel  = $row['nivel_usu'];
	} 

	#Compara dados do usuario com o do banco
	$a = strcmp($rgm,$rgmB);
	$b = strcmp($senha,$senhaB);

	#Compara credenciais do usuario com o banco
	if($a == 0 && $b == 0){
		# Direciona para pg correta depende do nivel de acesso do usuario...
		if($nivel == 0){	# Aguardando aprovação do ADMINISTRADOR
			echo 'Estou no aguarde de aprovação !!!';
		}else if($nivel == 1){	# Nivel de Aluno
			echo 'Sou aluno !!!';
		}else if($nivel == 2){	# Nivel de Professor
			echo 'Sou Professor !!!';
		}else if($nivel == 3){	# Nivel de Administrador
			echo 'Sou Administrador !!!';
		}
		# Iniciar Session AQUI !!!
	}else{
		header('Location: ../index.php?cadastro=3');
	}
*/
?>