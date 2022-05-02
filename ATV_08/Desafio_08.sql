create database Desafio_08;

use Desafio_08;

create table clientes(
	id_cliente int not null auto_increment,
    nome varchar(30),
    d_nascimento date,
    genero enum('F', 'M', 'O'),
    endereco varchar(255),
    primary key (id_cliente)
);


create table produtos(
	id_produto int not null auto_increment,
	nome_produto varchar(30),
    descricao text,
    preco int,
    d_garantia date,
    fabricacao varchar(255),
    primary key (id_produto)
);

alter table clientes add compram int;
alter table clientes add foreign key (compram) references produtos(id_produto);

