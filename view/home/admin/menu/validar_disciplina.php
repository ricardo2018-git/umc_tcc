
<div id="disciplina" class="list-group">
	<?php
		
		require_once("../../../control/listarDisciplinas.php");
		require_once("../../../model/getDisciplina.php");

		$buscar = new BuscaDisciplina();
		
		foreach($buscar->listarDisciplina() as $key => $row){
			echo 'Professor: '.$row->getNome_usu();
			echo '<br>';
			echo 'Disciplina: '.$row->getDisciplina();
			echo '<br>';
			echo 'Assunto: '.$row->getAssunto();
			echo '<br>';
			echo 'Titulo: '.$row->getTitulo();
			echo '<br>';
			echo 'Conteudo: '.$row->getConteudo();
			echo '<br>';
			echo 'Img: '.$row->getImg();
			echo '<br>';
			echo 'staus_dis: '.$row->getStaus_dis();
			echo '<br><br>';
		}
	?>
</div>