<?php
	
	#avisa que vamos usar a class
	require_once('class/db.class.php');

	#Recebe informações cadastrais do usuario
	$nome 			= $_POST['nome'];
	$cpf 			= $_POST["cpf"];
	$email 			= $_POST["email"];
	$rgm 			= $_POST["rgm"];
	$senha 			= $_POST["senha"];
	$confirma_senha = $_POST["confirma_senha"];
	$endereco 		= $_POST["endereco"];
	$cep 			= $_POST["cep"];
	$complemento 	= $_POST["complemento"];
	$cidade 		= $_POST["cidade"];
	$estado 		= $_POST["estado"];
	$telefone 		= $_POST["telefone"];
	$sexo 			= $_POST["sexo"];
	$nac 			= $_POST["nac"];
	#foto 			= $_POST["foto"];

	#instancia um obj
	$objDb = new db();
	$objDb2 = new db();

	#acessa o metodo de conexao, e recebe a conexao
	$link = $objDb->conecta_mysql();
	$link2 = $objDb2->conecta_mysql();

	#query de insert tabela usuario
	$sql_usuario = " insert into 
						usuario(rgm_usu, nome_usu, email_usu, senha_usu) 
							values('$rgm','$nome','$email', '$senha') ";

	#query de insert tabela enderco
	$sql_endereco =	"insert into 
						endereco(endereco, complemento, cep, cidade, estado, telefone, cpf, sexo, nacionalidade) 
							values('$endereco', '$complemento', '$cep', '$cidade', '$estado', '$telefone', '$cpf', '$sexo', '$nac')";

	#execultar a query
	if(mysqli_query($link, $sql_usuario) && mysqli_query($link2, $sql_endereco)){
		echo 'Usuario cadastrado com sucesso !';
	}else{
		echo 'Erro ao cadastrar usuario.';
	}
?>