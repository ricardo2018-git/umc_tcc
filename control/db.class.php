<?php

	class db{

		#Credenciais p/ acessar o servidor
		private $servidor = 'localhost';
		private $usuario = 'root';
		private $senha = '';
		private $db = 'anatomia';


		#conexao com o banco
		public function Open(){
			try{

				return new PDO("mysql:host=". $this->servidor . ";dbname=" . $this->db, $this->usuario, $this->senha);

			}catch(PDOException $ex){ #Se houver erro na conexão

				echo "Erro ao se conectar com o banco: " . $ex->getMessage();

			}
		}

	}

?>