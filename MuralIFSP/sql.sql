CREATE TABLE usuario (
	usu_id SERIAL PRIMARY KEY,
	usu_nick VARCHAR(10) NOT NULL UNIQUE,
	usu_nome VARCHAR(50) NOT NULL,
	usu_senha VARCHAR(250) NOT NULL,
	usu_email VARCHAR(30) NOT NULL,
	usu_cargo INTEGER NOT NULL
);