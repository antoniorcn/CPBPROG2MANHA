<?php
	$db = new PDO('mysql:host=localhost;dbname=quitanda;charset=utf8', 'root', '');
	echo "Conexão OK! <br/>"; 
	
	$nome = $_REQUEST['txtNome'];
	$qtd = $_REQUEST['txtQtd'];

	$sql = "INSERT INTO produtos (id, nome, metrica, quantidade, preco, vitaminas, organico) VALUES (2, '$nome', 'kilo', $qtd, 1.99, 'C; E', 'S')";

	$result = $db->exec( $sql );
	echo 'Produto inserido <br/>';
?>

<!--
http://localhost/manha-aula10/teste_db.php
-->