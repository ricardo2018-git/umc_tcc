<?php
	
	require_once("../../../control/visualizarDisciplina.php");

	echo 'MATERIA QUE VAI SER VALIDADA !!!';
	$id=null;
	$visualizar = new visualizarDisciplina();
	$visualizar->listarDisciplina($id);

	foreach($visualizar->listarDisciplina() as $key => $row){
		echo '<p><br>Professor: '.$row->getNome_usu().'</p>';
		echo '<p>Disciplina: '.$row->getDisciplina().'</p>';
		echo '<p>Postado em: '.$row->getData_dis().'</p>';
		echo '<p>Assunto: '.$row->getAssunto().'</p>';
		echo '<p>Titulo:'.$row->getTitulo().'</p>';
		echo '<p>Conteudo:<br>'.$row->getConteudo().'</p>';
		echo '<p>Imagens: '.$row->getImg().'</p>';
	}
?>