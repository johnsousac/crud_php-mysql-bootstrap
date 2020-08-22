-- criando o banco de dados crud
create database erp_crud;

-- selecionando a base crud
use erp_crud;

-- criando tabela
create table erp_tb_pessoas (
    id int auto_increment primary key not null,
    nome varchar(50) not null,
    cidade varchar(50) not null
);