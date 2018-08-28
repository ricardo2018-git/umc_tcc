  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- imagem do usuario superiro esquerdo da tela -->
<style>
img {
	position: absolute;
	border-radius: 50%;
	left: 50px;
	top: 60px;
}
#submenu {
	margin: 10px 120px;
}

.container{
	border: 0px solid red;
	margin-left: 350px;
}

</style>

<!-- Busca outra PG -->
<?php require_once "../head.php" ?>

	<!-- Manu superiro -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<!-- Imagem do usuario logado -->
						<div>
							<img src="conf/img/usuario_h.png" alt="Avatar" style="width:100px">
						</div>
					<!-- FIM Imagem do usuario logado -->
					<!-- -->
						<div>
							<h4>UMC</h4>
						</div>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#ent" ><span class="glyphicon glyphicon-log-in" ></span> Sobre</a></li>

					<li><a href="#" data-toggle="modal" data-target="#cad" ><span class="glyphicon glyphicon-user"></span> Sair</a></li>
				</ul>
			</div>
		</nav>
	<!-- FIM Manu superiro -->

	<!-- Corpo -->  
		<div class="container">
			<ul id="submenu" class="nav nav-tabs">
				<li class=""><a data-toggle="tab" href="#aluno">Aluno</a></li>
				<li class="active"><a data-toggle="tab" href="#professor">Professor</a></li>
				<li class=""><a data-toggle="tab" href="#administracao">Administração</a></li>
			</ul>
			<div class="tab-content">
				<div id="aluno" class="tab-pane fade">
					<h3>ALUNO</h3>
				</div>
			
			
				<div id="professor" class="tab-pane fade in active">
					<h3>PROFESSOR</h3>
				</div>
			
			
				<div id="administracao" class="tab-pane fade">
					<h3>ADIMINISTRAÇÃO</h3>
				</div>
			</div>
		</div>
	<!-- Corpo -->  

<!-- Busca outra PG -->
<?php require_once "../roda_pe.php" ?>