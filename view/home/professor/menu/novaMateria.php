 <?php

 	# MSG de materia cadastrada com sucesso!!!
	$cadastrada = isset($_GET['cadastrada']) ? $_GET['cadastrada'] : 0;

	  if($cadastrada == 1){
	    echo '<br><div class="alert alert-success alert-dismissible">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <center><strong> Disciplina, cadastrada com sucesso...</strong></center>
	        </div>';
	    $cadastrada = 0;
	}
?>

<div class="row">
	<div class="col-sm-6">
	  <h2>Nova Disciplina</h2>

		<form class="form-horizontal" action="../../../control/CadDisciplina.php" id="form" method="post">
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
					<input type="file" class="form-control" name="file">
				<label for="pro">Professor:</label>
					<input class="form-control" name="professor" id="pro" type="text" value="<? ?>" disabled>
			  	<br>
			  <button type="submit" class="btn btn-success" name="enviar">Enviar</button>
			  <button type="reset" class="btn btn-warning" name="limpar">Limpar</button><br><br>
			  <button type="submit" id="MeuInput" class="btn btn-info" name="visualizar">Visualizar</button>
			</div>	 
		</form>
		
	</div>

	<div class="col-sm-6">
		<h2>Veja como esta ficando</h2>
	</div>
</div>


