<html>

	<head>
		<link href="./css/bootstrap.min.css" rel="stylesheet"/>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.js"></script>
	</head>
	<body>

			<?php
				$db = new PDO('mysql:host=localhost;dbname=quitanda;charset=utf8', 'root', '');

				$nome = $_REQUEST['txtNome'];
				$qtd = $_REQUEST['txtQtd'];
				$metrica = $_REQUEST['txtMetrica'];
				$preco = $_REQUEST['txtPreco'];
				$vitaminas = $_REQUEST['txtVitaminas'];
				$org = $_REQUEST['txtOrganico'];
				$button = $_REQUEST['txtButton'];


				if ($button == "adicionar") {

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
					echo 'Produto inserido <br/>';
				} else if ($button == "pesquisar") {
					$sql = "SELECT * FROM produtos";
					$stmt = $db->query($sql);
			?>

				<table class="table">
				<?php
						forEach( $stmt as $row ) {
				?>
							<tr>
								<td><?=$row['id']?></td>
								<td><?=$row['nome']?></td>
							</tr>
				<?php	}
			} ?>
	</table>
</body>
