create database dsii_ag06_fichario;
use dsii_ag06_fichario;

create table aluno_concluinte(
  id_aluno_concluinte int(11) not null auto_increment,
  nome varchar(45) not null,
  nota1 float,
  nota2 float,
  nota3 float,
  nota4 float,
  primary key(id_aluno_concluinte)
);

insert into aluno_concluinte
	(nome, nota1, nota2, nota3, nota4)
values
	('Paulo',8,9,7,9),
    ('Pedro',5,4,6,7),
    ('Leonardo',10,10,9,10),
    ('Gabriel',9,9,10,9),
    ('Jonathan',10,10,10,9),
    ('Maria Eduarda',10,10,9,10),
    ('Caio',9,8,9,9),
    ('Rosana',10,10,9,9),
    ('Vanessa',9,8,10,9),
    ('Beatriz',8,8,7,9);