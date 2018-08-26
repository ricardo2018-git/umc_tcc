<?php

	require_once("../control/registraUsuario.class.php");
	require_once("../model/Usuario.class.php");

	#Fazer as validações de nome, e-mail, cpf, etc...
		#
	#FIM Fazer as validações de nome, e-mail, cpf, etc...

	#Cria obj e passa os parametros
	$u = new Registra();
	$u->Cadastrar(new Usuario(null, $_POST["nome"], $_POST["email"], $_POST["rgm"], $_POST["senha"]));

	echo "<script>alert('Usuario cadastrado com sucesso!')</script>";
?>