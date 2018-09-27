
<?php require_once ("head.php") ?>	
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
					<li><a href="../../index.php"><span class="glyphicon glyphicon-log-in" ></span> Inicio</a></li>
				</ul>
			</div>
		</nav>
	<!-- FIM Manu superiro -->

 	<div container>
 		<div class="col-sm-4"></div>

		<div class="col-sm-4">
			<div>
				<center><img src="../conf/img/esqueci_minha_senha.jpg" id="img_senha" class="img-circle" alt="Cinque Terre" height="200">
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
	
	<!-- Script faz o menu superior abrir e fecha com as opções ||| -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<?php require_once ("roda_pe.php") ?>