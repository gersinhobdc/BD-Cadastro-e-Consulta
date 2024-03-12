drop database atv1103;

create database atv1103;


use atv1103;

CREATE TABLE cadastro(
id int not null AUTO_INCREMENT,
nome varchar(255) not null,
idade int not null,
PRIMARY KEY (id));

INSERT INTO `cadastro` (`nome`, `idade`) VALUES ('gerson', '21'); 

SELECT * FROM cadastro;

desc cadastro;