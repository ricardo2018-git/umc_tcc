<!-- Busca outra PG -->
<?php require_once "head.php" ?>

	<!-- Manu superiro -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">UMC - Leopoldina</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in" ></span> Entre</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
				</ul>
			</div>
		</nav>
	<!-- FIM Manu superiro -->

  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Identifique-se</h4>
	        </div>
	        <div class="modal-body">
	       		<form>
	       			<!-- Img de login -->
	       				<center><img src="img/login2.jpg" class="img-circle" alt="Cinque Terre" height="150"></center>
	       			<!-- FIM Img de login -->	

	       			<!-- RGM e sua img -->
		       			<div class="input-group">
		       				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	    					<input id="id_rgm" type="text" class="form-control" name="rgm" placeholder="RGM">
		       			</div>
	       			<!-- FIM RGM e sua img -->
	       				<br/>
	       			<!-- Senha e img -->
	       				<div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						    <input id="id_senha" type="password" class="form-control" name="senha" placeholder="Senha">
						</div>
	       			<!-- FIM Senha e img -->

	       			<!-- Botões -->
	       				<div class="modal-footer row">
	       					<div class="col-sm-8">
	       						<button type="button" class="btn btn-success btn-block">Logar</button>
	       					</div>
	       					<div class="col-sm-4">
	       						<button type="button" class="btn btn-warning btn-block">Voltar</button>
	       					</div>
	       				</div>
	       			<!-- FIM Botões -->

	       		</form>
	        </div>
	        
	        <!-- aqui era onde estava o botão de sair -->
	        
	      </div>
	      
	    </div>
	  </div>
  <!-- FIM Modal -->

<!-- Busca outra PG -->
<?php require_once "roda_pe.php" ?>