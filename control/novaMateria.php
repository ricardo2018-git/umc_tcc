<?php

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
				echo 'rascunho';
				break;
			case 'enviar':
				echo 'enviar';
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