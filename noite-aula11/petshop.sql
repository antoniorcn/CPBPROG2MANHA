mysql -u root -p

create database petshop;

show databases;

use petshop;

create table animais (
	id int,
	nome char(100),
	raca char(30),
	nascimento date,
	nome_dono char(100),
	peso float
);

show tables;

desc animais;

INSERT INTO animais (id, nome, raca)
	VALUES (0, 'Rex', 'Vira-Lata');


SELECT id, nome, raca FROM animais;






INSERT INTO animais (id, nome, raca, nascimento, nome_dono, peso) VALUES (1, 'Sita', 'Calopsita', '2017-01-01', 'Antonio', 0.1);

INSERT INTO animais (id, nome, raca, nascimento, nome_dono, peso) VALUES (2, 'Koda', 'Gato vira lata', '2017-01-01', 'Antonio', 2.0);

UPDATE animais SET nascimento = NULL WHERE id = 1;

SELECT * FROM animais;
SELECT id, nome FROM animais WHERE id=2;
SELECT id, nome, raca FROM animais WHERE nome like '%K%' AND id < 10;

DELETE FROM animais WHERE id=1;
