<?php
	require_once("../../../control/CrudEndereco.php");

	$obj = unserialize(base64_decode($_SESSION["user"]));	# Descriptografa o meu usuario de sessao
	$dados = new CrudEndereco();
	$endereco = array();
	$id = $obj->getId();		# Recupera id do usuario

	foreach($dados->Listar() as $key => $row){
		if($id == $row->getId_end()){
			$endereco = $row;
			break;
		}
	}
	
?>
<div>
	<!-- JavaScript seta nossa URL passando valor 0 e redireciona para index, assim quando atualizar não abre a msg cadastrado com sucesso -->
	<div onclick="window.location.href='home.php?opcaoMenu=1';">
		<?php $sucesso = isset($_GET['sucesso']) ? $_GET['sucesso'] : null; 	# Mensagem alteracao
			switch ($sucesso){
				case '1':
					echo '<br><div class="alert alert-success alert-dismissible">
						  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<center><strong> Usuario alterado com sucesso...</strong></center>
						  </div>';
			}
		?>
	</div>
	<h3><center>Edite seu Perfil</center></h3><br>

	<form method="POST" action="../../../control/UpdatePerfil.php">
		 
		<div class="col-sm-6">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
				<input placeholder="Nome" value="<?php echo $obj->getNome(); ?>" type="text" name="nome" class="form-control" id="for_nome" required />
			</div>
		</div>
		
		<div class="col-sm-6 input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input placeholder="CPF" name="cpf" value="<?php echo $endereco->getCpf(); ?>" type="text" class="form-control" id="for_cpf" maxlength="11" required />
		</div>
	
		<div class="col-sm-6">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input placeholder="email@exemplo.com.br" value="<?php echo $obj->getEmail(); ?>" name="email" type="email" class="form-control" id="for_email" required />
			</div>		
		</div>
	
		<div class="col-sm-6 input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
			<input placeholder="RGM" value="<?php echo $obj->getRgm(); ?>" name="rgm" type="text" class="form-control" id="for_rgm" maxlength="11" required />
		</div>					
		
		<div class="col-sm-6">
			<div class="col-sm4 input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input placeholder="Senha" value="<?php echo $obj->getSenha(); ?>" name="senha" type="password" class="form-control" id="for_senha" maxlength="6" required />
			</div>	
		</div>

		<div class="col-sm-6 input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input placeholder="Confirma Senha" value="" name="confirma_senha" type="password" class="form-control" id="for_senha" maxlength="6" required />
		</div>							
	
		<div class="col-sm-6">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				<input placeholder="Endereço" value="<?php echo $endereco->getEndereco(); ?>" name="endereco" type="text" class="form-control" id="for_endereco" />
			</div>
		</div>

		<div class="col-sm-6">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
				<input placeholder="Cep" value="<?php echo $endereco->getCep(); ?>" name="cep" type="text" class="form-control" id="for_cep" />
			</div>
		</div>

		<div class="col-sm-6">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
				<input placeholder="Complemento" value="<?php echo $endereco->getComplemento(); ?>" name="complemento" type="text" class="form-control" id="for_cep" />
			</div>
		</div>
		
		<div class="col-sm-6 input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
			<input placeholder="Cidade" value="<?php echo $endereco->getCidade(); ?>" name="cidade" type="text" class="form-control" id="for_cidade" />
		</div>
		
		<div class="col-sm-6">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
				<input placeholder="Estado" value="<?php echo $endereco->getEstado(); ?>" name="estado" type="text" class="form-control" id="for_estado" />
			</div>
		</div>
		
		<div class="col-sm-6 input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
			<input placeholder="Telefone" value="<?php echo $endereco->getTelefone(); ?>" name="telefone" type="tel" class="form-control" id="for_telefone" />
		</div>
		
		<div>				
			<div id="radio" class="radio panel panel-default">
				<label for="for_sexo">Sexo: </label><br />
				<?php $s = $obj->getSexo(); ?>	<!-- Recupera sexo -->
				<label class="radio-inline"><input type="radio" name="sexo" value="f" <?php echo ($s == "f") ? "checked" : null; ?> >Feminino</label>
				<label class="radio-inline"><input type="radio" name="sexo" value="m" <?php echo ($s == "m") ? "checked" : null; ?> >Masculino</label>
				<label class="radio-inline"><input type="radio" name="sexo" value="o" <?php echo ($s == "o") ? "checked" : null; ?> >Outro(as)</label>
					<br /><br />
				<label for="for_nacionalidade">Nacionalidade</label><br />
				<?php $e = $endereco->getNacionalidade(); ?>	<!-- Recupera nacionalidade -->
				<label class="radio-inline"><input type="radio" name="nac" value="b" <?php echo ($e == "b") ? "checked" : null; ?> >Brasileiro(a)</label>			
				<label class="radio-inline"><input type="radio" name="nac" value="e"  <?php echo ($e == "e") ? "checked" : null; ?>>Estrangeiro(a)</label>
			</div>
		
			<div id="img_facul">
				<img src="../../conf/img/faculdade.jpg" class="img-circle" alt="Cinque Terre" height="100">
			</div>
		</div>

		<div class="modal-footer">
        	<button type="submit" class="btn btn-success" onclick="apagaForm()" />Salvar</button>
        	<button type="reset" class="btn btn-default">Limpar</button>
        </div>
	</form>
</div>