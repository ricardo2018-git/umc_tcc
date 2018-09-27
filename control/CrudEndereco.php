<?php
	require_once("Conexao.php");	# Permite Usar atributos e metodos desta class nesta pag q estamos

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

		# Listar
		
		# Excluir
	}
?>