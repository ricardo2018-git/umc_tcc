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
					<li><a href="#entre" data-toggle="modal" data-target="#ent" ><span class="glyphicon glyphicon-log-in" ></span> Entre</a></li>
					<li><a href="#cadastro" data-toggle="modal" data-target="#cad" ><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
				</ul>
			</div>
		</nav>
	<!-- FIM Manu superiro -->

  <!-- Modal Entre -->
	  <div class="modal fade" id="ent" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Identifique-se</h4>
	        </div>
	        <div class="modal-body">
	       		<form method="POST" action="control/Logar.php">
	       			<!-- Img de login -->
	       				<center><img src="view/conf/img/login2.jpg" class="img-circle" alt="Cinque Terre" height="150"></center>
	       			<!-- FIM Img de login -->	

	       			<!-- RGM e sua img -->
		       			<div class="input-group">
		       				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	    					<input id="id_rgm" type="text" class="form-control" name="log_rgm" placeholder="RGM" required />
		       			</div>
	       			<!-- FIM RGM e sua img -->
	       				<br/>
	       			<!-- Senha e img -->
	       				<div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						    <input id="id_senha" type="password" class="form-control" name="log_senha" placeholder="Senha" required />
						</div>
	       			<!-- FIM Senha e img -->

	       			<!-- Botões -->
	       				<div class="modal-footer row">
							<div class="col-sm-4">
	       						<a href="view/index/esqueci_minha_senha.php">Esqueci minha senha</a>
	       					</div>

	       					<div class="col-sm-4">
	       					<!--	<button type="button" class="btn btn-warning btn-block" data-dismiss="modal">Voltar</button> -->
	       					</div> 

	       					<div class="col-sm-4">
	       						<button type="submit" class="btn btn-success btn-block">Logar</button>
	       					</div>
	       				</div>
	       			<!-- FIM Botões -->

	       		</form>
	        </div>
	        
	        <!-- aqui era onde estava o botão de sair -->
	        
	      </div>
	      
	    </div>
	  </div>
  <!-- FIM Modal Entre -->

   <!-- Modal Cadastro -->
   		<body>
			<div class="container">
			  <!-- Modal -->
			  <div class="modal fade" id="cad" role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Formulario de cadastro</h4>
			        </div>
			        <div class="modal-body">
			        	<form method="POST" action="control/CadUsuarioEndereco.php">
		        		
		        			<div class="col-sm-6">
		        				<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
									<input placeholder="Nome" type="text" name="nome" class="form-control" id="for_nome" required />
								</div>
		        			</div>
			        		
							<div class="col-sm-6 input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input placeholder="CPF" name="cpf" type="text" class="form-control" id="for_cpf" maxlength="11" required />
							</div>
						
							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input placeholder="email@exemplo.com.br" name="email" type="email" class="form-control" id="for_email" required />
								</div>		
							</div>
						
							<div class="col-sm-6 input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
								<input placeholder="RGM" name="rgm" type="text" class="form-control" id="for_rgm" maxlength="11" required />
							</div>					
							
							<div class="col-sm-6">
								<div class="col-sm4 input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input placeholder="Senha" name="senha" type="password" class="form-control" id="for_senha" maxlength="6" required />
								</div>	
							</div>

							<div class="col-sm-6 input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input placeholder="Confirma Senha" name="confirma_senha" type="password" class="form-control" id="for_senha" maxlength="6" required />
							</div>							
						
							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
									<input placeholder="Endereço" name="endereco" type="text" class="form-control" id="for_endereco" />
								</div>
							</div>

							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
									<input placeholder="Cep" name="cep" type="text" class="form-control" id="for_cep" />
								</div>
							</div>

							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
									<input placeholder="Complemento" name="complemento" type="text" class="form-control" id="for_cep" />
								</div>
							</div>
							
							<div class="col-sm-6 input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
								<input placeholder="Cidade" name="cidade" type="text" class="form-control" id="for_cidade" />
							</div>
							
							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
									<input placeholder="Estado" name="estado" type="text" class="form-control" id="for_estado" />
								</div>
							</div>
							
							<div class="col-sm-6 input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
								<input placeholder="Telefone" name="telefone" type="tel" class="form-control" id="for_telefone" />
							</div>
							
							<div>				
								<div id="radio" class="radio panel panel-default">
									<label for="for_sexo">Sexo: </label><br />
									<label class="radio-inline"><input type="radio" name="sexo" value="f">Feminino</label>						
									<label class="radio-inline"><input type="radio" name="sexo" value="m">Masculino</label>
									<label class="radio-inline"><input type="radio" name="sexo" value="o">Outro(as)</label>
										<br /><br />
									<label for="for_nacionalidade">Nacionalidade</label><br />
									<label class="radio-inline"><input type="radio" name="nac" value="b">Brasileiro(a)</label>			
									<label class="radio-inline"><input type="radio" name="nac" value="e">Estrangeiro(a)</label>
								</div>
							
								<div id="img_facul">
									<img src="view/conf/img/faculdade.jpg" class="img-circle" alt="Cinque Terre" height="100">
								</div>
							</div>

							<div class="modal-footer">
					        	<button type="submit" class="btn btn-success" onclick="apagaForm()" />Cadastrar</button>
					        	<button type="reset" class="btn btn-default">Limpar</button>
					        </div>
			        	</form>
			        </div>
			      
			      </div>
			      
			    </div>
			  </div>
			  
			</div>

			<!-- Script faz o menu superior abrir e fecha com as opções ||| -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			
		</body>
   <!-- Modal Cadastro -->