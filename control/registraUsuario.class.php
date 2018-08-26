<?php

	require_once("../control/db.class.php");		#Referencia a classe de conexao
	require_once("../model/Usuario.class.php");		#Referencia a classe usuario

	class Registra{

		public function Listar(){}

		public function Cadastrar($user){
			try{
				$conn = new db();		#instancia um obj
				$PDO = $conn->Open();	#Abre conexao com o banco

				#Passando parametros para o insert
					$id    = $user   -> getId();
					$nome  = $user -> getNome();
					$email = $user -> getEmail();
					$rgm   = $user  -> getRgm();
					$senha = $user -> getSenha();
					#$foto  = $user -> getFoto();
				#FIM Passando parametros para o insert

				#Query de insert
				$sql = "INSERT INTO usuario(id_usu, rgm_usu, nome_usu, email_usu, senha_usu) 
									VALUES('".null."','".$rgm."', '".$nome."', '".$email."', '".$senha."')";

				#executa a query
				$PDO->Query($sql);

			}catch(Exception $e){
				throw new Exception("Erro tentar cadastrar Usuario", 1);
			}
		}
		
		public function Dados($user){}

		public function alterar($user){}

		public function Pesquisar($nome){}
		
		public function Excluir($id){}
	}
?>