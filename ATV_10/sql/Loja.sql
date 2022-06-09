create database bd_loja;

use bd_loja;

create table produto(
	cod_prod int null auto_increment,
    nome varchar(45),
    quantidade int(3),
    preco float,
    primary key (cod_prod)
);

select * from produto;