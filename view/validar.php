<?php

	require_once("../model/Usuario.class.php");

	$u = new Usuario();
	$u->Usuario(new Usuario(null, $_POST["nome"], $_POST["email"], $_POST["rgm"], $_POST["senha"]));

	#echo "<script>alert('Usuario cadastrado com sucesso!')</script>";

?>