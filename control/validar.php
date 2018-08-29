<?php

	require_once("../control/registraUsuario.class.php");
	require_once("../model/Usuario.class.php");
	require_once("../model/Dados.class.php");

	#Fazer as validações de nome, e-mail, cpf, etc...
		#
	#FIM Fazer as validações de nome, e-mail, cpf, etc...

	#Cria obj e passa os parametros
	$u = new Registra();
	$u->Cadastrar(new Usuario(null, $_POST["nome"], $_POST["email"], $_POST["rgm"], $_POST["senha"]));

	#busca ultimo id inserido no bd
	$id = $u->ListarId();

	# Insert do restante dos dados
	$u->Dados(new Dados(null, $id, $_POST["cpf"], $_POST["endereco"], $_POST["cep"], $_POST["complemento"], $_POST["cidade"], $_POST["estado"], $_POST["telefone"], $_POST["sexo"], $_POST["nac"]));

	#verifica se foi cadastrado realmente [ Tenho q melhorar isto ]
	#if($u){
	#	header('Location: ../index.php?casdatro=1');
	#	echo "<script>alert('Usuario cadastrado com sucesso!')</script>";
	#}else{
	#	echo 'não cadastrado';
	#}

?>