<?php 
	
	session_start();

	unset($_SESSION['nome']);
	unset($_SESSION['rgm']);
	unset($_SESSION['nivel']);
	unset($_SESSION['sexo']);
	unset($_SESSION['foto']);

	# passar valor get p/ obter msg na index de volte sempre. [pendencia]
	header("Location: ../../index.php?cadastro=5");

?>