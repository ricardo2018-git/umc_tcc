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
		<!--  <link rel="stylesheet" href="conf/css/home.css">  -->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<!-- CSS -->
		<style>

			body {
			    font-family: "Lato", sans-serif;
			    transition: background-color .5s;
			}

			.sidenav {
			    height: 100%;
			    width: 0;
			    position: fixed;
			    z-index: 1;
			    top: 0;
			    left: 0;
			    background-color: #111;
			    overflow-x: hidden;
			    transition: 0.5s;
			    padding-top: 60px;
			}

			.sidenav a {
			    padding: 8px 8px 8px 32px;
			    text-decoration: none;
			    font-size: 25px;
			    color: #818181;
			    display: block;
			    transition: 0.3s;
			}

			.sidenav a:hover {
			    color: #f1f1f1;
			}

			.sidenav .closebtn {
			    position: absolute;
			    top: 0;
			    right: 25px;
			    font-size: 36px;
			    margin-left: 50px;
			}

			#main {
			    transition: margin-left .5s;
			    padding: 16px;
			}

			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}

			/*Img do ususario*/
			#img{

			  position: relative;
			  left: 0px;
			  top: -20px;
			  width: 102px;
			}
			.desativa {
			  pointer-events: none;
			  cursor: default;
			  opacity: 0.6;
			  text-decoration: line-through;  /*Risca a palavra no meio*/
			}

			/* ------------------------------------------------------- */
			.card {
			    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			    width: 85%;  /*100%*/
			    /*-----------------*/
			    position:relative;
			    left:25%;
			    top:25%;
			}
			.column {
			    float: left;
			    width: 75.0%; /*33.3%*/
			    margin-bottom: 16px;
			    padding: 0 8px;
			}
			@media screen and (max-width: 85%) {  /*650px*/
			    .column {
			        width: 85%;
			        display: block;
			    }
			}
			.container {
			    padding: 0 16px;
			}
			.title {
			    color: grey;
			}
			.button {
			    border: none;
			    outline: 0;
			    display: inline-block;
			    padding: 8px;
			    color: white;
			    background-color: #000;
			    text-align: center;
			    cursor: pointer;
			    width: 100px;
			}
			.button:hover {
			    background-color: #555;
			}

			</style>
	<!-- CSS -->

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
					<li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Sobre</a></li>
					<li><a href="../sair.php"><span class="glyphicon glyphicon-user"></span> Sair</a></li>
				</ul>
			</div>
		</nav>
	<!-- FIM Manu superiro -->

	<!-- Corpo -->  
		<div class="container">

			<?php require_once "menu_lateral.php" ?>

		</div>
	<!-- Corpo -->  

	<!-- Script faz o menu superior abrir e fecha com as opções ||| -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Busca outra PG -->
<?php require_once "../../roda_pe.php" ?>