<?php
	session_start();
	require_once('CrudUsuario.php');
	require_once('CrudEndereco.php');

	# UpDate no cadastro
		try{
			$obj = unserialize(base64_decode($_SESSION["user"]));	# Recupera Session Usuario
			echo $id = $obj->getId();		# Recupera o nivel de acesso
			$usuario = new CrudUsuario();	# Cria Obj
			$usuario->Alterar(new Usuario($id, $_POST['rgm'], 0, $_POST['nome'], $_POST['email'], $_POST['senha'], null, $_POST['sexo'], null));	# Acessa o metodo cadastrar & Cria um Obj Usuario, passando seus parametros

			# Busca o ultimo id que foi cadastrado no banco
			#$id = $usuario->UltimoId();

			$endereco = new CrudEndereco();	# Cria Obj
			$endereco->Alterar(new Endereco(null, $id, $_POST['endereco'], $_POST['complemento'], $_POST['cep'], $_POST['cidade'], $_POST['estado'], $_POST['telefone'], $_POST['cpf'], $_POST['nac']));	# Acessa o metodo cadastrar & Cria um Obj Endereco, passando seus parametros

			# Redireciona mesma tela com mensagem de alteracao efetuada com sucesso
			header('Location:../view/home/admin/home.php?opcaoMenu=1&sucesso=1');
		}catch(Exception $e){
			header('Location:../index.php?cadastro=2');
		}

	# FIM UpDate no cadastro
?>