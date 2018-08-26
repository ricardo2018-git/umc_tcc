<?php

	require_once("../control/registraUsuario.class.php");
	require_once("../model/Usuario.class.php");

	$u->Cadastrar(new Usuario(null, $_POST["nome"], $_POST["email"], $_POST["rgm"], $_POST["senha"]));

	echo "<script>alert('Usuario cadastrado com sucesso!')</script>";
?>