
<?php
	
	#Inicia a session
	session_start();

	#Permite usar atributos e metodos desta class
	require_once('../control/db.class.php');
	require_once('../control/registraUsuario.class.php');
/*
	$u = new Registra();


	$cont = 0;
	echo $_POST["log_rgm"].'<br>';
	echo $_POST["log_senha"];
	echo '<br><br>';

	foreach ($u->Listar() as $key => $obj){
		if( $log_rgm == $obj->getRgm() && $log_senha == $obj->getSenha()){
			$cont++;
			break;
		}
	}

	echo $a = $obj->getRgm(); #getRgm
	echo '<br>';
	echo $b = $obj->getSenha();

	echo '<br><br>';

	if($cont > 0){
		echo 'já esta registrado novo';
	}else{
		echo 'não esta registrado novo';
	}

*/



















	#Dados recebido do usuario
	$rgm = $_POST['log_rgm'];
	$senha = $_POST['log_senha'];

	$conn = new db();		#Chama conexao
	$PDO = $conn->Open();	#Abre a conexao

	#Consulta com inner join
	$sql = "SELECT * FROM usuario as u
				INNER JOIN endereco as e
					ON u.id_usu = e.id_usu
						WHERE rgm_usu = '$rgm' AND senha_usu = '$senha' ";

	#Os dados do select será armazenados aqui
	$dados = array();
	
	#execulta query
	$dados = $PDO->Query($sql);

	#declara var
	$rgmB = null;
	$senhaB = null;
	
	#Pega somente os dados necessarios do select
	foreach($dados as $key => $row){
		$_SESSION['id']		= $row['id_usu'];	# Não tinha é novo para amarar a disciplina do prof 
		$_SESSION['rgm']    = $row['rgm_usu'];
		$_SESSION['nivel']  = $row['nivel_usu'];
		$_SESSION['nome']   = $row['nome_usu'];
		$_SESSION['eMail']  = $row['email_usu'];
		$_SESSION['sexo']   = $row['sexo'];
		$_SESSION['foto']   = $row['foto_usu'];
		$_SESSION['senha']  = $row['senha_usu'];
	} 

	#Compara dados do usuario com o do banco
	$a = strcmp($rgm,$_SESSION['rgm']);
	$b = strcmp($senha,$_SESSION['senha']);

	#Compara credenciais do usuario com o banco
	if($a == 0 && $b == 0){
		# Inicia session
			$_SESSION['id'];					# Não tinha é novo para amarar a disciplina do prof
			$_SESSION['nome'];
			$_SESSION['rgm'];
			$_SESSION['nivel'];
			$_SESSION['sexo'];
		# FIM Inicia session

		# Direciona para pg correta depende do nivel de acesso do usuario...
		if($_SESSION['nivel'] == 0){	# Aguardando aprovação do ADMINISTRADOR
			header('Location: ../view/home/aprovacao/home.php');
		}else if($_SESSION['nivel'] == 1){	# Nivel de Aluno
			header('Location: ../view/home/aluno/home.php');
		}else if($_SESSION['nivel'] == 2){	# Nivel de Professor
			header('Location: ../view/home/professor/home.php');
		}else if($_SESSION['nivel'] == 3){	# Nivel de Administrador
			header('Location: ../view/home/admin/home.php');
		}
	}else{
		header('Location: ../index.php?cadastro=3');
	}

?>