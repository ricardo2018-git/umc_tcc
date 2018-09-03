<?php

	require_once("../control/registraUsuario.class.php");
	require_once("../model/Usuario.class.php");
	require_once("../model/Dados.class.php");

	#Fazer as validações de nome, e-mail, cpf, etc...
		#
	#FIM Fazer as validações de nome, e-mail, cpf, etc...
	
	try{
		#Cria obj e passa os parametros
		$u = new Registra();
		$u->Cadastrar(new Usuario(null, 0, $_POST["nome"], $_POST["email"], $_POST["rgm"], $_POST["senha"]));

		#busca ultimo id inserido no bd
		$id = $u->ListarId();

		# Insert do restante dos dados
		$u->Dados(new Dados(null, $id, $_POST["cpf"], $_POST["endereco"], $_POST["cep"], $_POST["complemento"], $_POST["cidade"], $_POST["estado"], $_POST["telefone"], $_POST["sexo"], $_POST["nac"]));

		#verifica se foi cadastrado realmente [Melhorar isto com um tri cat]
		#if($u){
			header('Location: ../index.php?cadastro=1');
			$u=null;
	}catch(Exception $e){
		header('Location: ../index.php?cadastro=2');
		$u=null;
	}

?>