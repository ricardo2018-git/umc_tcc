<?php
	require_once("../../../control/CrudDisciplina.php");
	$buscar = new CrudDisciplina();
?>
<div id="disciplina" class="list-group">
	<center><h2>Materias pendente de aprovacao !!!<br><br></h2></center>

	<table class="table table-hover">
		<thead>
			<tr>
				<center>
					<th>Professor</th>
					<th>Disciplina</th>
					<th>Data</th>
					<th>Validar</th>
				</center>
			<tr>
		</thead>
		<tbody>
				<?php foreach($buscar->listar() as $key => $row){ ?>
			<tr>
				<td><?php echo $row->getNome_usu(); ?></td>
				<td><?php echo $row->getDisciplina(); ?></td>
				<td><?php echo $row->getData_dis(); ?></td>
				<td>
					<button onclick="window.location.href='../../../control/validarMateria.php?id=<?php echo $row->getId(); ?>';" type="button" class="btn btn-success">Validar</button>
					<button onclick="window.location.href='home.php?opcaoMenu=6&id=<?php echo $row->getId(); ?>';" type="button" class="btn btn-warning">Visualizar</button>
				</td>
			<tr>	
				<?php } ?>
		</tbody>
	</table>
</div>