<?php session_start();	# Inicia uma sessão

	#require_once('Conexao.php');
	require_once('CrudUsuario.php');

	$usuario = new CrudUsuario();	# Cria um Obj

	$cont = 0;		# Var de controle
	$user = array();	# Vai guardar a Sessão do usuario

	$rgm =	$_POST['log_rgm'];	# Recebe rgm do usuario
	$senha = $_POST['log_senha'];	# Recebe senha do usuario

	# Faz uma busca no banco p/ validar o acesso
	foreach($usuario->Listar() as $key => $row){
		if($rgm == $row->getRgm() && $senha == $row->getSenha()){
			$user = $row;	# Guarda o registro na variavel
			$cont++;		# Adiciona + 1
			break;			# Encerra
		}
	}

	# Verifica se ele pode logar
	if($cont > 0){
		
		
		$_SESSION["user"] = base64_encode(serialize($user));

		switch($user->getNivel()){
			case '0':
				header('Location: ../view/home/aprovacao/home.php');
			break;
			case '1':
				header('Location: ../view/home/aluno/home.php');
			break;
			case '2':
				header('Location: ../view/home/professor/home.php');
			break;
			case '3':
				header('Location: ../view/home/admin/home.php');
			break;
		}
	}
/*
		#Dados recebido do usuario
	$rgm = $_POST['log_rgm'];
	$senha = $_POST['log_senha'];

	$conn = new Conexao();		#Chama conexao
	$PDO = $conn->Open();	#Abre a conexao

	#Consulta com inner join
	$sql = "SELECT * FROM usuario";

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
		$_SESSION['senha']  = $row['senha_usu'];
		$_SESSION['foto']   = $row['foto_usu'];
		$_SESSION['sexo']  = $row['sexo_usu'];
		$_SESSION['data']	= $row['data_cad_usu'];
	} 

	#Compara dados do usuario com o do banco
	$a = strcmp($rgm,$_SESSION['rgm']);
	$b = strcmp($senha,$_SESSION['senha']);

	#Compara credenciais do usuario com o banco
	if($a == 0 && $b == 0){
		/*# Inicia session
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
	}*/
?>