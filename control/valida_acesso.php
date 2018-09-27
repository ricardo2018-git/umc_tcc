
<?php
	
	#Inicia a session
	session_start();

	#Permite usar atributos e metodos desta class
	require_once('../control/db.class.php');
	require_once('../control/registraUsuario.class.php');

	$u = new Registra();

	$cont = 0;
	$log_rgm =  $_POST["log_rgm"];
	$log_senha =  $_POST["log_senha"];

	$user = null;

	foreach ($u->Listar() as $key => $obj){
		if( $log_rgm == $obj->getRgm() && $log_senha == $obj->getSenha()){
			$user = $obj; #pega o registro do banco e guarda na variavel
			$cont++;
			break;
		}
	}
	#echo $a = $obj->getRgm(); #getRgm
	#echo '<br>';
	#echo $b = $obj->getSenha();
	#echo '<br><br>';
	if($cont > 0){
		# Pega todos dados do usuario que logou e cria sua sessao
		$_SESSION["user_a"] = base64_encode(serialize($user));

		echo base64_encode(serialize($user));

		$obj = unserialize(base64_decode($_SESSION["user_a"])); // 

		print_r($obj);
		echo "NOME " . $obj->getRgm();
		echo "SeNha " . $obj->getSenha();
		#echo $nivel = $obj->getNivel();
		# Direciona para pg correta depende do nivel de acesso do usuario...

		switch($obj->getNivel()){
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
/*
		if($_SESSION['nivel'] == 0){	# Aguardando aprovação do ADMINISTRADOR
			header('Location: ../view/home/aprovacao/home.php');
		}else if($_SESSION['nivel'] == 1){	# Nivel de Aluno
			header('Location: ../view/home/aluno/home.php');
		}else if($_SESSION['nivel'] == 2){	# Nivel de Professor
			header('Location: ../view/home/professor/home.php');
		}else if($_SESSION['nivel'] == 3){	# Nivel de Administrador
			header('Location: ../view/home/admin/home.php');
		}	*/
	}else{
		header('Location: ../index.php?cadastro=3');
	}
	
	/*#Dados recebido do usuario
	echo $rgm = $_POST['log_rgm'];
	echo $senha = $_POST['log_senha'];

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
	}*/

?>