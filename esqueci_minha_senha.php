<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">							<!--Compatibilidade com internet explore-->
		<meta name="viewport" content="width=device-width, initial-scale=1">			<!--Define a largura do dispositivo-->
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>UMC - Anatomia</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="css/css2.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body>		


<!-- Manu superiro -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">UMC - Campus Villa-Lobos/Lapa</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php"><span class="glyphicon glyphicon-log-in" ></span> Inicio</a></li>
				</ul>
			</div>
		</nav>
	<!-- FIM Manu superiro -->

 	<div container>
 		<div class="col-sm-4"></div>

		<div class="col-sm-4">
			<div>
				<center><img src="img/esqueci_minha_senha.jpg" id="img_senha" class="img-circle" alt="Cinque Terre" height="200">
				<h3>Esqueci minha senha</h3></center>
			</div>
				
			<form>
				<div class="col-sm-12">
					<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input type="email" placeholder="email@exemplo.com.br" class="form-control" required />
					</div>
				<div><br /><center>
				<input type="submit" class="btn btn-success" value="Enviar" /></center>
				
			</form><br /><br /><center>
			<span>Você recebera um e-mail com suas credenciais para acessar nosso sistema novamente.</span></center>
		</div>

		<div class="col-sm-4"></div>
	</div>

<?php require_once "roda_pe.php" ?>