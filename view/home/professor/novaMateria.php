
<div class="row">
	<div class="col-sm-6">
	  <h2>Nova Disciplina</h2>

		<form class="form-horizontal" action="../../../control/novaMateria.php" id="form" method="post">
			<div class="form-group">
				<label for="di">* Disciplina:</label>
					<input type="text" name="disciplina" class="form-control" id="di" required>
				<label for="no">* Assunto:</label>
					<input type="text" name="assunto" class="form-control" id="no" required>
				<label for="ti">* Titulo:</label>
					<input type="text" name="titulo" class="form-control" id="ti" required>
				<label for="co">* Conteudo:</label>
					<textarea class="form-control" rows="5" name="conteudo" id="co" required></textarea>
				<label for="img">Imagem:</label>
					<input type="file" class="form-control" name="file"><br>
				<label for="pro">Professor:</label>
					<input class="form-control" name="professor" id="pro" type="text" value="<?php echo $_SESSION['eMail'] ?>" disabled>
			  	<div class="radio">
				  <label><input type="radio" name="ras" value="salvar" onclick="if(document.getElementById('rascunho1').disabled==true){document.getElementById('rascunho1').disabled=false}">Salvar</label>
				  <label><input type="radio" name="ras" value="buscar" onclick="if(document.getElementById('rascunho1').disabled==true){document.getElementById('rascunho1').disabled=false}">Buscar</label>
			  </div>
			  <button type="submit" id="rascunho1"class="btn btn-default" name="rascunho" disabled="disabled">Rascunho</button><br><br>
			  <button type="submit" class="btn btn-success" name="enviar">Enviar</button>
			  <button type="submit" class="btn btn-warning" name="limpar">Limpar</button>
			  <button type="submit" class="btn btn-info" name="visualizar">Visualizar</button><br><br>
			</div>	 
		</form>
	</div>

	<div class="col-sm-6">
		<h2>Veja como esta ficando</h2>
	</div>
</div>


