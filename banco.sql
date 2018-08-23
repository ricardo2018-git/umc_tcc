/* --- Cria banco de dados --- */
CREATE DATABASE anatomia;

/* --- Seleciona o bando de dados --- */
USE anatomia;

/* --- Cria uma tabela --- */
CREATE TABLE usuario(
	id_usu      	int not null PRIMARY KEY AUTO_INCREMENT,	/* Gera automatico, chave PK */
	rgm_usu			varchar(12) not null,						/*Não pode ser nulo*/
	nome_usu 		varchar(50) not null,						/*Não pode ser nulo*/
	email_usu   	varchar(100) not null,						/*Não pode ser nulo*/
	senha_usu   	varchar(32) not null,						/*Não pode ser nulo*/
	foto_usu		varchar(255),								/*Pode ser null*/
	data_cad_usu	datetime default current_timestamp			/*Inseri data e hora automatico*/
);

/* -- Dados do usuario -- */
CREATE TABLE endereco(
	id_end      	int not null PRIMARY KEY AUTO_INCREMENT,	/* Gera automatico, chave PK */
	id_usu			int not null, FOREIGN KEY(id_usu) REFERENCES usuario(id_usu),/*FK*/
	endereco		varchar(50),
	complemento 	varchar(30),
	#numero			varchar(10),
	cep				varchar(50),
	cidade			varchar(50),
	estado			char(3),
	telefone		varchar(25),
	cpf				varchar(12),
	sexo			varchar(2),
	nacionalidade	varchar(15)
);