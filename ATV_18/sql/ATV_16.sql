create database bd_tarefa;

use bd_tarefa;

create table usuario(
	id_usuario int not null auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    login varchar(30) unique,
    senha varchar(32),
    foto varchar(100),
    primary key (id_usuario)
);

/*insert into usuario(nome, sobrenome, login, senha) values ('Jubileu', 'Da Silva', 'jubs45', md5('123456789'));*/
select * from usuario;

delete from usuario where id_usuario = 1;

create table tarefa(
	id_tarefa int not null auto_increment,
    fk_usuario int not null,
    titulo varchar(45),
    descricao text,
    data_cadastro date,
    status_tarefa varchar(30),
    primary key (id_tarefa),
    foreign key (fk_usuario) references usuario(id_usuario)
);