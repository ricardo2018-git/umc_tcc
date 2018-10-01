<?php
	require_once("Conexao.php");	# Permite Usar atributos e metodos desta class nesta pag q estamos
	require_once("../model/Usuario.php");	# estava asssim antes

	Class CrudUsuario{

		# Busca ultimo id cadastrado no banco
		public function UltimoId(){
			try{
				$conn = new Conexao();	# Cria um Obj
				$PDO = $conn->Open();	# Abre conexao

				# Query
				$sql = "SELECT MAX(id_usu) as id from usuario";

				# Executa query e armazena o resultado
				$result = $PDO->Query($sql);

				# Inicia var que guardará o ultimo id do banco
				$id = null;

				# Pega apenas o id da select feita no banco
				foreach ($result as $key => $row){
					$id = $row["id"];
					break;
				}

				# Retorna o ultimo id
				return $id;

			}catch(Exception $e){
				throw new Exception("Erro ao tentar bucascar id", 1);
			}
		}

		# Cadastrar
		public function Cadastrar($user){
			try{
				$conn = new Conexao();	# Cria um Obj
				$PDO = $conn->Open();	# Abre conexao

				# Pega parametros da class Usuario
				$id		= $user->getId();
				$rgm	= $user->getRgm();
				$nivel	= $user->getNivel();
				$nome	= $user->getNome();
				$email	= $user->getEmail();
				$senha	= $user->getSenha();
				$foto	= $user->getFoto();
				$sexo	= $user->getSexo();
				$data	= $user->getData();

				# Query SQL
				$sql = "INSERT INTO usuario(id_usu, rgm_usu, nivel_usu, nome_usu, email_usu, senha_usu, foto_usu, sexo_usu) 
							VALUES('".null."', '".$rgm."', '".$nivel."', '".$nome."', '".$email."', '".$senha."', '".null."', '".$sexo."')";

				# Executa a query
				$PDO->Query($sql);
			}catch(Exception $e){
				throw new Exception("Erro ao tentar cadastrar Usuario", 1);
			}
		}

		# Alterar
		public function Alterar($user){
			try{
				$obj = unserialize(base64_decode($_SESSION["user"]));	# Recupera Session Usuario
				$id = $obj->getId();	# Recupera o id
				$conn = new Conexao();	# Cria um Obj
				$PDO = $conn->Open();	# Abre conexao

				# Pega parametros da class Usuario
				$id		= $user->getId();
				$rgm	= $user->getRgm();
				$nivel	= $user->getNivel();
				$nome	= $user->getNome();
				$email	= $user->getEmail();
				$senha	= $user->getSenha();
				$foto	= $user->getFoto();
				$sexo	= $user->getSexo();
				$data	= $user->getData();

				# Query SQL
				$sql = "UPDATE usuario SET rgm_usu = '".$rgm."', nome_usu = '".$nome."', email_usu = '".$email."', senha_usu = '".$senha."', foto_usu = '".null."', sexo_usu = '".$sexo."' WHERE id_usu = '".$id."'";
							
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
				$sql = "SELECT * FROM usuario";
				$result = $PDO->Query($sql);
				foreach($result as $key => $row){
					$dados[] = new Usuario(
						$row['id_usu'],
						$row['rgm_usu'],
						$row['nivel_usu'],
						$row['nome_usu'],
						$row['email_usu'],
						$row['senha_usu'],
						$row['foto_usu'],
						$row['sexo_usu'],
						$row['data_cad_usu']
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