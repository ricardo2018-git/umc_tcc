<?php 
	
	session_start();

	unset($_SESSION['nome']);
	unset($_SESSION['rgm']);
	unset($_SESSION['nivel']);
	unset($_SESSION['sexo']);
	unset($_SESSION['foto']);

	header('Location: ../../index.php?sai');

?>