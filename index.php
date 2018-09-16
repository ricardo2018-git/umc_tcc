<?php require_once "view/head.php" ?>
<?php require_once "view/menu_superior.php" ?>
	<div container>

		<!-- JavaScript seta nossa URL passando valor 0 e redireciona para index, assim quando atualizar não abre a msg cadastrado com sucesso -->
		<div onclick="window.location.href='index.php?cadastro=0',window.location.href='index.php';">
			<!-- Logica p/ apresenta mensagem de usuario cadastrado com sucesoo -->
				<?php
					$cadastro = isset($_GET['cadastro']) ? $_GET['cadastro'] : 0;
				
					if($cadastro == 1){		#Usuario cadastrado com sucesso
	 					echo '<div class="alert alert-success alert-dismissible">
							  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<center><strong> Usuario cadastrado com sucesso...</strong></center>
							  </div>';
					}else if($cadastro == 2){	#Erro ao cadastrar
						echo '<div class="alert alert-danger" alert-dismissible">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<center><strong> Não foi possivel efetuar o cadastro...</strong></center>
						  	  </div>';
					}else if($cadastro == 3){	# Usuario não cadastrado
						echo '<div class="alert alert-danger" alert-dismissible">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<center><strong> RGM ou senha invalido !!!</strong></center>
						  	  </div>';
					}else if($cadastro == 4){	# Se usuario tenta invadir o sistema
						echo '<div class="alert alert-warning">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  								<center><strong>Te pegamos!</strong> Você não vai invadir nosso sistema.</strong></center>
							 </div>';
					}else if($cadastro == 5){
						echo '<div class="alert alert-info">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  								<center><strong>Volte sempre, mantenha seu estudo em dia!!!</strong></center>
							 </div>';
					}
				?>
			<!-- FIM Logica p/ apresenta mensagem de usuario cadastrado com sucesoo -->
		</div>


		<?php require_once "view/apresentacao_inicial.php" ?>
		
	</div>
<?php require_once "view/roda_pe.php" ?>

