<?php
	require_once("Conexao.php");	# Permite Usar atributos e metodos desta class nesta pag q estamos
	require_once("Endereco.php");


	Class CrudEndereco{

		# Cadastrar
		public function Cadastrar($user){
			try{
				$conn = new Conexao();	# Cria um Obj
				$PDO = $conn->Open();	# Abre conexao

				# Pega parametros da class Endereco
				$id_end 		= $user->getId_end();
				$id_usu 		= $user->getId_usu();
				$endereco 		= $user->getEndereco();
				$complemento 	= $user->getComplemento();
				$cep 			= $user->getCep();
				$cidade 		= $user->getCidade();
				$estado 		= $user->getEstado();	
				$telefone 		= $user->getTelefone();
				$cpf 			= $user->getCpf();
				$nacionalidade 	= $user->getNacionalidade();

				# Query insert 
				$sql = "INSERT INTO endereco(id_end_end, id_usu, endereco_end, complemento_end, cep_end, cidade_end, estado_end, telefone_end, cpf_end, nacionalidade_end) 
							VALUES('".null."', '".$id_usu."', '".$endereco."', '".$complemento."', '".$cep."', '".$cidade."', '".$estado."', '".$telefone."', '".$cpf."', '".$nacionalidade."')";

				# Executa query
				$PDO->Query($sql);
			}catch(Exception $e){
				throw new Exception("Erro ao tentar cadastrar Endereco", 1);
			}
		}

		# Alterar
		public function Alterar($user){
			try{
				#$obj = unserialize(base64_decode($_SESSION["user"]));	# Recupera Session Usuario
				#$id = $obj->getId();		# Recupera o id
				$conn = new Conexao();	# Cria um Obj
				$PDO = $conn->Open();	# Abre conexao

				# Pega parametros da class Usuario
				$id_end 		= $user->getId_end();
				$id_usu 		= $user->getId_usu();
				$endereco 		= $user->getEndereco();
				$complemento 	= $user->getComplemento();
				$cep 			= $user->getCep();
				$cidade 		= $user->getCidade();
				$estado 		= $user->getEstado();	
				$telefone 		= $user->getTelefone();
				$cpf 			= $user->getCpf();
				$nacionalidade 	= $user->getNacionalidade();

				# Query SQL
				$sql = "UPDATE usuario SET endereco_end = '".$endereco."', complemento_end = '".$complemento."', cep_end = '".$cep."', cidade_end = '".$cidade."', estado_end = '".$estado."', telefone_end = '".$telefone."', cpf_end = '".$cpf."', nacionalidade_end = '".$nacionalidade."' WHERE id_usu = '".$id_usu."'";
							
				# Executa a query
				$PDO->Query($sql);
			}catch(Exception $e){
				throw new Exception("Erro ao tentar cadastrar Usuario", 1);
			}
		}

		# Listar
		public function Listar(){
			try{
				$dados = array();
				$conn = new Conexao();
				$PDO = $conn->Open();
				$sql = "SELECT * FROM endereco";
				$result = $PDO->Query($sql);
				foreach($result as $key => $row){
					$dados[] = new Endereco(
						$row['id_end_end'],
						$row['id_usu'],
						$row['endereco_end'],
						$row['complemento_end'],
						$row['cep_end'],
						$row['cidade_end'],
						$row['estado_end'],
						$row['telefone_end'],
						$row['cpf_end'],
						$row['nacionalidade_end']
					);
				}
				return $dados;
			}catch(Exception $e){
				throw new Exception("Erro ao tentar listar", 1);
			}
		}
		# Excluir
	}
?>