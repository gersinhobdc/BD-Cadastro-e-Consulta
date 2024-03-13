drop database atv;

create database atv;


use atv;

CREATE TABLE cadastro(
id int not null AUTO_INCREMENT,
nome varchar(255) not null,
idade int not null,
PRIMARY KEY (id));

INSERT INTO `cadastro` (`nome`, `idade`) VALUES ('Gerson', '21'); 

SELECT * FROM cadastro;

desc cadastro;