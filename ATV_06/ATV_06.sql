create database Desafio_6;

use Desafio_6;

create table alunos(
	CPF varchar(25),
    nome varchar(45),
    d_nascimento date,
    genero enum('F', 'M', 'O')
);

create table disciplina(
	código int,
    nome varchar(45),
    descricacao varchar(255)
);

create table professor(
	CPF varchar(25),
    nome varchar(45),
    d_nascimento date,
    genero enum ('F', 'M', 'O'),
    formacacao varchar(80)
);

describe alunos;
describe disciplina;
describe professor;