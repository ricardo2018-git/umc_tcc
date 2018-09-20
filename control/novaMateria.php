<?php
	
	require_once("registraUsuario.class.php");
	require_once("../model/Disciplina.class.php");

	#Inicia a session
	session_start();

	# Função que recebe o valor do btnPressionado
		function get_post_action($name){
			$params = func_get_args();
			foreach ($params as $name){
				if(isset($_POST[$name])){
					return $name;
				}
			}
		}
	# FIM Função que recebe o valor do btnPressionado

	# Compara o name do btn pressionado, e direciona
		switch(get_post_action('rascunho', 'enviar', 'limpar', 'visualizar')){
			case 'rascunho':
				# Recebe radio selecionado (salvar ou buscar)
				$rascunho = isset($_POST['ras']) ? $_POST['ras'] : 0;
				if($rascunho){
					echo $rascunho;
				}
				echo 'rascunho';
				#header('Location: ../view/home/aprovacao/home.php');
				break;
			case 'enviar':
				# Cadastrar uma materia
					# Recebe radio selecionado (salvar ou buscar)
					$rascunho = 'g';#isset($_POST['ras']) ? $_POST['ras'] : 0;
					$id_prof  = $_SESSION['id'];

					#Novo objs e passa parametros
					$novaMateria = new Registra();
					$novaMateria -> cadastraMateria(new Disciplina(null, $id_prof, $_POST['disciplina'], $_POST['assunto'], $_POST['titulo'], $_POST['conteudo'], $_POST['file'], $rascunho));
					
					# Fecha conexao com bd
					$u=null;
					
					#configuração p/ mensagem de cadastro efetuado com sucesso.
					header('Location: ../view/home/professor/home.php?novaMateria=2&cadastrada=1');
										
				# FIM Cadastrar uma materia
				break;
			case 'limpar':
				echo 'limpar';
				break;
			case 'visualizar';
				echo 'visualizar';
				break;
			default:
				echo 'não há opção';
		}
	# Compara o name do btn pressionado, e direciona

?>