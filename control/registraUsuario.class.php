<?php

	require_once("../control/db.class.php");		#Referencia a classe de conexao
	require_once("../model/Usuario.class.php");		#Referencia a classe usuario

	class Registra{

		public function ListarId(){
			try{
				$conn = new db();		#instancia um obj
				$PDO = $conn->Open();	#Abre conexao com o banco

				#Query de select
				$sql = "SELECT max(id_usu) as id from usuario";

				#executa a query
				$result = $PDO->Query($sql);

				$id = null;

				foreach ($result as $key => $row){
					$id = $row["id"];
					break;
				}

				return $id;

			}catch(Exception $e){
				throw new Exception("Erro tentar cadastrar Usuario", 1);
			}
		}

		#Cadastra os dados do usuario na tabela 'usuario'
		public function Cadastrar($user){
			try{
				$conn = new db();		#instancia um obj
				$PDO = $conn->Open();	#Abre conexao com o banco

				#Passando parametros para o insert
					$id    = $user -> getId();
					$nome  = $user -> getNome();
					$email = $user -> getEmail();
					$rgm   = $user -> getRgm();
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
		
		#Cadastra o complemento do dados do usuario na tabela 'endereço'
		public function Dados($user){
			try{
				$conn = new db();		#instancia um obj
				$PDO = $conn->Open();	#Abre conexao com o banco

				#Passa os parametros p/ o insert
					$id_end 		= $user -> getId_end();
					$id_usu 		= $user -> getId_usu();
					$cpf 			= $user -> getCpf();
					$endereco		= $user -> getEndereco();
					$cep 			= $user -> getCep();
					$complemento	= $user -> getComplemento();
					$cidade 		= $user -> getCidade();
					$estado			= $user -> getEstado();
					$telefone		= $user -> getTelefone();
					$sexo 			= $user -> getSexo();
					$nac 			= $user -> getNac();
				#FIM Passa os parametros p/ o insert

				#Query de insert
				$sql = "INSERT INTO endereco(id_end, id_usu, endereco, complemento, cep, cidade, estado, telefone, cpf, sexo, nacionalidade) 
							VALUES('".null."','".$id_usu."', '".$endereco."', '".$complemento."', '".$cep."', '".$cidade."', '".$estado."', '".$telefone."', '".$cpf."', '".$sexo."', '".$nac."')";

				#executa a query
				$PDO->Query($sql);

			}catch(Exception $e){
				throw new Exception("Erro ao tentar cadastrar Endereço", 1);
			}
		}

		public function alterar($user){}

		public function Pesquisar($nome){}
		
		public function Excluir($id){}
	}
?>