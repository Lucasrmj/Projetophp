create database sistema;
use sistema;

create table produto (
    id int key, 
    nome varchar(50), 
    preco float,
    genero varchar(45),
    descricao varchar(500), nome_arc varchar(100), 
    ext_arc varchar(5));
    
select * from produto;


create table adm (
    login varchar(50),
    senha varchar(50)
    );
    
create table usuario(
    username varchar(45),
    senha varchar(45)
    );

create table cadastro(
    nome  varchar(45),
    email varchar(60),
    senha varchar(45),
    telefone varchar(45)
    );
    
insert into adm values ("adm2023","1234");
select * from produto; 



