<?php
	require_once("CrudUsuario.php");	# Permite Usar atributos e metodos desta class nesta pag q estamos
	require_once("CrudEndereco.php");	# Permite Usar atributos e metodos desta class nesta pag q estamos
	require_once("../model/Usuario.php");	# Permite Usar atributos e metodos desta class nesta pag q estamos
	require_once("../model/Endereco.php");	# Permite Usar atributos e metodos desta class nesta pag q estamos

	try{

		$usuario = new CrudUsuario();	# Cria Obj
		$usuario->Cadastrar(new Usuario(null, $_POST['rgm'], 0, $_POST['nome'], $_POST['email'], $_POST['senha'], null, $_POST['sexo'], null));	# Acessa o metodo cadastrar & Cria um Obj Usuario, passando seus parametros

		# Busca o ultimo id que foi cadastrado no banco
		$id = $usuario->UltimoId();

		$endereco = new CrudEndereco();	# Cria Obj
		$endereco->Cadastrar(new Endereco(null, $id, $_POST['endereco'], $_POST['complemento'], $_POST['cep'], $_POST['cidade'], $_POST['estado'], $_POST['telefone'], $_POST['cpf'], $_POST['nac']));	# Acessa o metodo cadastrar & Cria um Obj Endereco, passando seus parametros

		# Redireciona para tela de login index
		header('Location:../index.php?cadastro=1');
	}catch(Exception $e){
		header('Location:../index.php?cadastro=2');	# Erro 2 falha na tentativa de cadastro do usuario
	}

?>