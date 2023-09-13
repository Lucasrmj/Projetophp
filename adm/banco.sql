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
    
insert into adm values ("adm2023","1234");
select * from produto; 