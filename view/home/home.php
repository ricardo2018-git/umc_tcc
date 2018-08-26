<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  border-radius: 50%;
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
							<img src="img/usuario_h.png" alt="Avatar" style="width:50px">
						</div>
					<!-- FIM Imagem do usuario logado -->
					<!-- -->
						<div>
							Nome: Ricardo Ramos Paixão
						</div>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#ent" ><span class="glyphicon glyphicon-log-in" ></span> Contato</a></li>

					

					<li><a href="#" data-toggle="modal" data-target="#cad" ><span class="glyphicon glyphicon-user"></span> Sair</a></li>
				</ul>
			</div>
		</nav>
	<!-- FIM Manu superiro -->

	<!-- Corpo -->  
		<ul class="nav nav-tabs">
			<li class=""><a href="#">Aluno</a></li>
			<li class=""><a href="#">Professor</a></li>
			<li class=""><a href="#">Administração</a></li>
		</ul>
	<!-- Corpo -->  

<!-- Busca outra PG -->
<?php require_once "../roda_pe.php" ?>