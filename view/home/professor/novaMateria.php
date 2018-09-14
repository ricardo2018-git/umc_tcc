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

					<form class="form-group" action="../../../control/novaMateria.php" id="form" method="post">
						<label for="no">* Assunto:</label>
						<input type="text" class="form-control" id="no">
						<label for="ti">* Titulo:</label>
						<input type="text" class="form-control" id="ti">
						<label for="co">* Conteudo:</label>
						<textarea class="form-control" rows="5" id="co"></textarea>
						<label for="img">Imagem:</label>
						<input type="file" name="file"><br>
						<label for="pro">Professor:</label>
						<input type="text"class="form-control" id="pro"> 
					  <div class="radio">
						  <label><input type="radio" name="ras" value="salvar">Salvar</label>
						  <label><input type="radio" name="ras" value="buscar">Buscar</label>
					  </div>
					  <button type="submit" class="btn btn-default" name="rascunho">Rascunho</button><br><br>
					  <button type="submit" class="btn btn-success" name="enviar">Enviar</button>
					  <button type="submit" class="btn btn-warning" name="limpar">Limpar</button>
					  <button type="submit" class="btn btn-info" name="visualizar">Visualizar</button><br><br>	 
					</form>
				</div>

				<div class="col-sm-6">
					<h2>Veja como esta ficando</h2>
				</div>
			</div>
		</div>

	</body>
</html>
