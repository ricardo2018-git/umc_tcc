
<div id="disciplina" class="list-group">
	<?php
		
		require_once("../../../control/listarDisciplinas.php");
		require_once("../../../model/getDisciplina.php");

		$buscar = new BuscaDisciplina();

		echo '<center><h2>Materias pendente de aprovação !!!<br><br></h2></center>';
		echo '<table class="table table-hover">
				<thead>
					<tr>
						<center>
						<th>Professor</th>
						<th>Disciplina</th>
						<th>Assunto</th>
						<th>Data</th>
						<th>Validar</th>
						</center>
					</tr>
				</thead>
				<tbody>';

		foreach($buscar->listarDisciplina() as $key => $row){
			echo '<tr><td>' . $row->getNome_usu() 		. '</td>'
				. '<td>' 	. $row->getDisciplina() 	. '</td>'
			 	. '<td>' 	. $row->getAssunto() 		. '</td>'
			 	. '<td>' 	. $row->getData_dis() 		. '</td>'
			 	. '<td><button type="button" class="btn btn-warning">Visualizar</button>
			 	   <button type="button" class="btn btn-success">Validar</button></tr>';
		}

		echo '	</tbody>
			</table>';
	?>
</div>