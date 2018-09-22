<?php
	require_once("../../../control/listarDisciplinas.php");
	require_once("../../../model/getDisciplina.php");
	$buscar = new BuscaDisciplina();
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
				<?php foreach($buscar->listarDisciplina() as $key => $row){ ?>
			<tr>
				<td><?php echo $row->getNome_usu() ?></td>
				<td><?php echo $row->getDisciplina() ?></td>
				<td><?php echo $row->getData_dis() ?></td>
				<td>
					<button onclick="window.location.href='../../../control/validarMateria.php?id=<?php echo $row->getId(); ?>';" type="button" class="btn btn-success">Validar</button>
					<button type="button" class="btn btn-warning">Visualizar</button>
				</td>
			<tr>	
				<?php } ?>
		</tbody>
	</table>
</div>