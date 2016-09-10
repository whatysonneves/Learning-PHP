-- 
-- Criado por Whatyson Neves
-- whatyson@promasters.net.br
-- 

-- 
-- Criando o banco aulaDePHP
-- 
CREATE SCHEMA IF NOT EXISTS aulaDePHP DEFAULT CHARACTER SET utf8;

-- 
-- Criando a tabela aluno
-- 
CREATE TABLE IF NOT EXISTS aulaDePHP.aluno (
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(100) NULL,
	email VARCHAR(200) NULL,
	dtNasc DATE NULL,
	PRIMARY KEY (id))
ENGINE = InnoDB;