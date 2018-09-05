<?php 
	# Inicia session
	session_start();

	# Verifica se a session não existe
	if(!isset($_SESSION['nome'])){
		#redireciona para index passando get 
		header('Location: ../../../index.php?cadastro=4');
	}
?>

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

		<!-- Meu css -->
		<link rel="stylesheet" href="../conf/css/home.css">

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
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					  <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
					<a class="navbar-brand" href="#">UMC - Villa-Lobos</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#ent" ><span class="glyphicon glyphicon-log-in" ></span> Sobre</a></li>
					<li><a href="#" data-toggle="modal" data-target="#cad" ><span class="glyphicon glyphicon-user"></span> Sair</a></li>
				</ul>
			</div>
		</nav>
	<!-- FIM Manu superiro -->

	<!-- Corpo -->  
		<div class="container">
			<!-- Imagem do usuario -->
				<div class="row">
					<div>
						<?php
							if($_SESSION['foto'] == null){

								if($_SESSION['sexo'] == 'm'){ # Foto macoluno
									echo '<img src="../conf/img/usuario_h.png" class="img-circle" alt="Cinque Terre" width=100px>';

								}else if($_SESSION['sexo'] == 'f'){ # Foto feminino
									echo '<img src="../conf/img/usuario_f.png" class="img-circle" alt="Cinque Terre" width=100px>';

								}else if($_SESSION['sexo'] == 'a'){	# Foto Outros
									echo '<img src="../conf/img/usuario_h2.png" class="img-circle" alt="Cinque Terre" width=100px>';
								}
							}else{
								# Pegar foto do banco
							}
						?>
					</div>
				</div>
			<!-- FIM Imagem do usuario -->

			<!-- Propaganda -->
				<div id="propaganda">
					<!-- RESERVADO PARA PROPRAGANDA -->
				</div>
			<!-- FIM Propaganda -->

				<div id="submenu">
					<ul class="nav nav-tabs">
						<li class=""><a data-toggle="tab" href="#espera">Espera</a></li>
						<li class=""><a data-toggle="tab" href="#aluno">Aluno</a></li>
						<li class="active"><a data-toggle="tab" href="#professor">Professor</a></li>
						<li class=""><a data-toggle="tab" href="#administracao">ADM...</a></li>
					</ul>
					<div class="tab-content">
						<div id="espera" class="tab-pane fade">
							<h3>Sala de Espera</h3>
						</div>
						
						<div id="aluno" class="tab-pane fade">
							<h3>ALUNO</h3>
						</div>
					
						<div id="professor" class="tab-pane fade">
							<h3>PROFESSOR</h3>
							<?php
								$_SESSION['nome'] = $nomeB;
								$_SESSION['rgm'] = $rgmB;
								$_SESSION['nivel'] = $nivelB;
								$_SESSION['email'] = $emailB;
								#$_SESSION['foto'] = $fotoB;
							?>
						</div>
					
						<div id="administracao" class="tab-pane fade">
							<h3>ADIMINISTRAÇÃO</h3>
						</div>
					</div>
				</div>
			
		</div>
	<!-- Corpo -->  

	<!-- Script faz o menu superior abrir e fecha com as opções ||| -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Busca outra PG -->
<?php require_once "../../roda_pe.php" ?>