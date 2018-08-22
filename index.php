<?php require_once "head.php" ?>
<?php require_once "menu_superior.php" ?>
	<div container>
		<?php require_once "apresentacao_inicial.php" ?>
		<form method="POST" action="registra_usuario.php">
	       			<!-- Img de login -->
			<img src="img/login2.jpg" class="img-circle" alt="Cinque Terre" height="150">
		
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input id="id_rgm" type="text" class="form-control" name="log_rgm" placeholder="RGM" required />
		
		    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		    <input id="id_senha" type="password" class="form-control" name="log_senha" placeholder="Senha" required />
	
			<a href="esqueci_minha_senha.php">Esqueci minha senha</a>
	
			<button type="submit" class="btn btn-success btn-block">Logar</button>
	    </form>
	</div>
<?php require_once "roda_pe.php" ?>

