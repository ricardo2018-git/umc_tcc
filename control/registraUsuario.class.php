<?php

	require_once("../control/db.class.php");		#Referencia a classe de conexao
	require_once("../model/Dados.class.php");		#Referencia a classe Dados
	require_once("../model/Usuario.class.php");		#Referencia a classe Dados

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
				throw new Exception("Erro tentar buscar id", 1);
			}
		}

		#Cadastra os dados do usuario na tabela 'usuario'
		public function Cadastrar($user){
			try{
				$conn = new db();		#instancia um obj
				$PDO = $conn->Open();	#Abre conexao com o banco

				#Passando parametros para o insert
					$id    = $user -> getId();
					$rgm   = $user -> getRgm();
					$nivel = $user -> getNivel();
					$nome  = $user -> getNome();
					$email = $user -> getEmail();
					$senha = $user -> getSenha();
					#$foto  = $user -> getFoto();
				#FIM Passando parametros para o insert

				#Query de insert
				$sql = "INSERT INTO usuario(id_usu, rgm_usu, nivel_usu, nome_usu, email_usu, senha_usu) 
							VALUES('".null."', '".$rgm."', '".$nivel."', '".$nome."', '".$email."', '".$senha."')";

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

		public function Listar(){
			try{
				$dados = array();
				$conn = new db();
				$PDO = $conn->Open();

				$sql = "SELECT * FROM usuario";	

				$result = $PDO->Query($sql);				

				foreach($result as $key => $row){
					$dados[] = new Usuario(
						$row["id_usu"],
						$row["rgm_usu"],
						$row["nivel_usu"],
						$row["nome_usu"],
						$row["email_usu"],
						$row["senha_usu"],
						$row["foto_usu"],
						$row["data_cad_usu"]
					);
				}
				return $dados;
			}catch(Exception $e){
				throw new Exception("Erro ao processar Request", 1);
			}
		}
		

		public function ListarDados(){
			try{
				$dados = array();
				$conn = new db();
				$PDO = $conn->Open();

				$sql = "SELECT * FROM endereco";	

				$result = $PDO->Query($sql);				

				foreach($result as $key => $row){
					$dados[] = new Dados(
						$row["id_end"],
						$row["id_usu"],
						$row["endereco"],
						$row["complemento"],
						$row["cep"],
						$row["cidade"],
						$row["estado"],
						$row["telefone"],
						$row["cpf"],
						$row["sexo"],
						$row["nascionalidade"]
					);
				}
				return $dados;
			}catch(Exception $e){
				throw new Exception("Erro ao processar Request", 1);
			}
		}

		public function Excluir($id){}

		# Cadastra uma materia no banco
		public function cadastraMateria($user){
			try{
				$conn = new db();			# Cria um obj
				$PDO = $conn -> Open();		# Abre coneção com o banco
				
				# Recebe parametros para o insert
					$id 		= $user->getId();
			 		$id_pro 	= $user->getId_pro();
			 		$disciplina = $user->getDisciplina();
			 		$assunto 	= $user->getAssunto();
			 		$titulo 	= $user->getTitulo();
			 		$conteudo 	= $user->getConteudo();
			 		$img 		= $user->getImg();
					$staus_dis 	= $user->getStaus_dis();
				# FIM Passa parametros para o insert

				#recuperar id do professor
				#$id_pro = <-- AQUI;
				
				# Meu comando sql para inserir materia no bd
				$sql = "INSERT INTO disciplina(id_dis, id_usu, disciplina_dis, assunto_dis, titulo_dis, Conteudo_dis, img_dis, staus_dis)
							VALUES('".null."', '".$id_pro."', '".$disciplina."', '".$assunto."', '".$titulo."', '".$conteudo."', '".$img."', '".$staus_dis."')";

				# Execulta a query
				$PDO->QUERY($sql);

			}catch(Exception $e){
				throw new Exception("Erro ao tentar cadastrar Nova Materia", 1);
			}
		}
	}
?>