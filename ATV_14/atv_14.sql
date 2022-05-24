create database bd_14;

use bd_14;

create table usuario(
	id_usuario int not null auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    login varchar(30) unique,
    senha varchar(32),
    foto varchar(100),
    primary key(id_usuario)
);

create table tarefa(
	id_tarefa int not null auto_increment,
    se_usuario int not null,
    titulo varchar(45),
    descricao text,
    data_cadastro date,
    status_tarefa varchar(30),
    primary key (id_tarefa),
    foreign key (se_usuario) references usuario (id_usuario)
);

select * from usuario;