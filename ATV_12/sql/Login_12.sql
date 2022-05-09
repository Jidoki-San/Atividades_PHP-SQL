create database aula12_login;

use aula12_login;

create table usuario(
	ID_usuario int not null auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    login varchar(30) unique,
    senha varchar(32),
    primary key (ID_usuario)
);

select * from usuario;

insert into usuario(nome, sobrenome, login, senha)
values ('Guilherme', 'F da Siva', 'Jidoki', md5('31425'));