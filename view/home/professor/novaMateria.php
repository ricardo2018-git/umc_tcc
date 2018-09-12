<?php

	# Menu Superior
	
	# Conteudo

	# Roda-pé

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro de diciplina</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
				  <h2>Nova Disciplina</h2>

					<form class="form-group">
						<label for="no">Assunto:</label>
						<input type="text" class="form-control" id="no">
						<label for="ti">Titulo:</label>
						<input type="text" class="form-control" id="ti">
						<label for="co">Conteudo:</label>
						<textarea class="form-control" rows="5" id="co"></textarea>
						Imagem:<br>
						<label for="pro">Professor:</label>
						<input type="text"class="form-control" id="pro"> 

						<br><br>
					  <button type="button" class="btn btn-success">Enviar</button>
					  <button type="button" class="btn btn-warning">Limpar</button>
					  <button type="button" class="btn btn-info">Visualizar</button><br><br>
					  <div class="radio">
						  <label><input type="radio" name="optradio">Salvar</label>
						  <label><input type="radio" name="optradio">Buscar</label>
					  </div> 
					  <button type="button" class="btn btn-default">Rascunho</button>
					 	 
					</form>
				</div>

				<div class="col-sm-6">
					<h2>Veja como esta ficando</h2>
				</div>
			</div>
		</div>

	</body>
</html>
