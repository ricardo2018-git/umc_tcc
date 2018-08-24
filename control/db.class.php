<?php

	class db{

		#host
			private $host = 'localhost';

		#usuario
			private $usuario = 'root';

		#senha
			private $senha = '';

		#banco
			private $database = 'anatomia';


		#conexao com o banco
		public function conecta_mysql(){

			#Abre a conexao
			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

			#configura padrao utf8
			mysqli_set_charset($con, 'utf8');

			#verifica se houve erro de conexao
			if(mysqli_connect_errno()){
				echo 'Erro ao tentar se conectar com o BD: '. mysqli_connect_error();
			}

			return $con;
		}

	}

?>