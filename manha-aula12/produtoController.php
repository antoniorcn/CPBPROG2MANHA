	<?php
		$db = new PDO('mysql:host=localhost;dbname=quitanda;charset=utf8', 'root', '');

		$nome = $_REQUEST['txtNome'];
		$button = $_REQUEST['txtButton'];

		if ($button == "adicionar") {
			$qtd = $_REQUEST['txtQtd'];
			$metrica = $_REQUEST['txtMetrica'];
			$preco = $_REQUEST['txtPreco'];
			$vitaminas = $_REQUEST['txtVitaminas'];
			$org = $_REQUEST['txtOrganico'];

			$sql = "INSERT INTO produtos (id, nome, metrica, quantidade, preco, vitaminas, organico) ";
			$sql = $sql . " VALUES (:id, :nome, :med, :qtd, :valor, :vitaminas, :org)";
			$stmt = $db->prepare($sql);
			$stmt->bindValue(':id', 0, PDO::PARAM_INT);
			$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindValue(':med', $metrica, PDO::PARAM_STR);
			$stmt->bindValue(':qtd', $qtd, PDO::PARAM_INT);
			$stmt->bindValue(':valor', $preco, PDO::PARAM_INT);
			$stmt->bindValue(':vitaminas', $vitaminas, PDO::PARAM_STR);
			$stmt->bindValue(':org', $org, PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->rowCount();
		} else if ($button == "pesquisar") {
			$sql = "SELECT * FROM produtos";
			$stmt = $db->query($sql);
		}
		header('Location: ./produtos.html');
?>
