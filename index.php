<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">							<!--Compatibilidade com internet explore-->
		<meta name="viewport" content="width=device-width, initial-scale=1">			<!--Define a largura do dispositivo-->
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>UMC</title>

		<!-- Bootstrap -->
			<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!--Caminho do css do bootStrap-->
			<link href="css/estilo.css" rel="stylesheet">					

		<!--Caminho do meu css-->
			<link href="js/estilo.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<!--   Janela Modal  -->
			<form class="modal fade" id="janela">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">

						<!--Cabeçalho-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span style="color: red;">&times;</span>
								</button>
								<h4 class="modal-title">Efetuar login</h4>						
							</div>
						<!-- FIM Cabeçalho -->
						
						<!-- Corpo -->
							<div class="modal-body">
								<div class="form-group">
									<input type="text" class="form-control" id="rgm" placeholder="Rgm">
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control" id="senha" placeholder="Senha">
								</div>

								<div>
									<a href="#">Esqueci minha senha</a>
								</div>
							</div>
						<!-- FIM Corpo -->

						<!-- Rodapé -->
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">
									<span style="color: green;" class="glyphicon glyphicon-ok"></span>
									Logar
								</button>

								<button type="button" class="btn btn-default" data-dismiss="modal">
									<span style="color: red;" class="glyphicon glyphicon-remove"></span>
									Cancelar
								</button>
							</div>
						<!-- FIM Rodapé -->
					</div>
				</div>
			</form>
		<!--   FIM Janela Modal  -->

		<!-- Menu superior três riscos-->
			<nav class="navbar navbar-default">
				<div class="container">
				
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" 
								data-toggle="collapse" data-target="#barra-navegacao">
							<span class="sr-only">Alternar Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand">LOGO</a> 	
					</div>
					
					<div class="collapse navbar-collapse" id="barra-navegacao">
					
						<ul class="nav navbar-nav navbar-right">	<!--Lista-->
							<li> <a data-toggle="modal" data-target="#janela" href="#">Logar</a> </li>
							<li> <a href="#">Cadastre-se</a> </li>
						</ul>
					</div>
					
				</div>
			</nav>
		<!-- FIM Menu superior três riscos-->			

		<!--Container-->
			<div class="container capa">	

				<!-- Conteudo -->

				<!-- FIM Conteudo -->
			</div>						
		<!--FIM Container-->

		<!-- Roda pé -->
			<footer>
				<div class="container">
					<div>
						<ul class="item-rede-social">
							<li class="item-rede-social"><a href="#"><img src="img/instagram.png"></a></li>
							<li class="item-rede-social"><a href="#"><img src="img/twitter.png"></a></li>
							<li class="item-rede-social"><a href="#"><img src="img/facebook.png"></a></li>
						</ul>
					</div>

				</div>
			</footer>
		<!-- FIM Roda pé -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="bootstrap/js/bootstrap.min.js"></script>
			
	</body>
</html>