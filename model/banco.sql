/* --- Cria banco de dados --- */
CREATE DATABASE anatomia2;

/* --- Seleciona o bando de dados --- */
USE anatomia2;

/* --- Cria uma tabela --- */
CREATE TABLE usuario(
	id_usu      	int not null PRIMARY KEY AUTO_INCREMENT,	/* Gera automatico, chave PK */
	rgm_usu			varchar(12) not null,						/*Não pode ser nulo*/
	nivel_usu		int not null,
	nome_usu 		varchar(50) not null,						/*Não pode ser nulo*/
	email_usu   	varchar(50) not null,						/*Não pode ser nulo*/
	senha_usu   	varchar(32) not null,						/*Não pode ser nulo*/
	foto_usu		varchar(255),								/*Pode ser null*/
	sexo_usu		varchar(2),
	data_cad_usu	datetime default current_timestamp			/*Inseri data e hora automatico*/
);

/* -- Dados do usuario -- */
CREATE TABLE endereco(
	id_end_end      	int not null PRIMARY KEY AUTO_INCREMENT,	/* Gera automatico, chave PK */
	id_usu				int not null, FOREIGN KEY(id_usu) REFERENCES usuario(id_usu),/*FK*/
	endereco_end		varchar(50),
	complemento_end 	varchar(30),
	cep_end				varchar(50),
	cidade_end			varchar(50),
	estado_end			varchar(25),
	telefone_end		varchar(25),
	cpf_end				varchar(12),
	nacionalidade_end	varchar(15)
);

/*-- Disciplina cadastrada --*/
CREATE TABLE disciplina(
	id_dis	int not null PRIMARY KEY AUTO_INCREMENT,
	id_usu	int not null, FOREIGN KEY(id_usu) REFERENCES usuario(id_usu),
	disciplina_dis	varchar(255) not null,
	titulo_dis		varchar(255) not null,
	assunto_dis		varchar(255) not null,
	conteudo_dis	varchar(255) not null,
	img_dis			varchar(255),
	status_dis		varchar(5),							/*g = aguardando aprovação, a = aprovado, r = reprovado*/	
	data_dis		datetime default current_timestamp		/*Inseri data e hora automatico*/
);