create database projeto_js_php;
use projeto_js_php;

create table usuarios( 
usu_id int PRIMARY KEY,
usu_nome varchar(255) not null,
usu_email varchar(255) not null,
usu_senha varchar(255) not null
);


create table clientes(
cli_id int PRIMARY KEY,
cli_nome varchar(255) not null,
cli_email varchar(255) not null,
cli_telefone int(15) not null,
cli_endereco varchar(255) not null,
cli_nascimento date not null,
cli_convenio varchar(255) not null
);