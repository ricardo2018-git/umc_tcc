
<div id="disciplina" class="list-group">
	<?php
		
		require_once("../../../control/listarDisciplinas.php");
		require_once("../../../model/getDisciplina.php");

		$buscar = new BuscaDisciplina();

		echo '<center><h2>Materias pendentes de aprovação !!!<br><br></h2></center>';
		echo '<table class="table table-hover">
				<thead>
					<tr>
						<th>Professor</th>
						<th>Disciplina</th>
						<th>Assunto</th>
						<th>Data</th>
					</tr>
				</thead>
				<tbody>';

		foreach($buscar->listarDisciplina() as $key => $row){
			echo '<tr><td>' . $row->getNome_usu() 		. '</td>'
				. '<td>' 	. $row->getDisciplina() 	. '</td>'
			 	. '<td>' 	. $row->getAssunto() 		. '</td>'
			 	. '<td>' 	. $row->getData_dis() 		. '</td></tr>';
		}

		echo '	</tbody>
			</table>';
	?>
</div>