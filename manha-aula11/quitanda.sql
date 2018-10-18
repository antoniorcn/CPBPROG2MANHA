create database quitanda;
use quitanda;
create table produtos (
	id int,
	nome char(100),
	metrica char(15),
	quantidade int,
	preco float,
	vitaminas varchar(100),
	organico char(1)
);
show tables;
desc produtos;
SELECT * FROM produtos;
INSERT INTO produtos (id, nome, metrica, quantidade, preco, vitaminas, organico) VALUES (1, 'Laranja Bahia', 'kilo', 200, 2.99, 'C; E', 'S');