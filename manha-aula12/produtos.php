<html>

	<head>
		<link href="./css/bootstrap.min.css" rel="stylesheet"/>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.js"></script>


	</head>

	<body>
		<h1>Gestão de Produtos Alimenticios</h1>

		<?php
			session_start();
			if (isset($_SESSION['MENSAGEM'])) {
					echo $_SESSION['MENSAGEM'];
					unset($_SESSION['MENSAGEM']);
			}
			$lista = array();
			if (isset($_SESSION['LISTA'])) {
				$lista = $_SESSION['LISTA'];
			}
		 ?>

		<form action="./produtoController.php">
			<div class="container">
				<div class="form-group">
					<label for="txtNome">Nome:</label>
					<input id="txtNome" name="txtNome" type="text" class="form-control"/>
				</div>

				<div class="form-group">
					<label for="txtMetrica">Metrica:</label>
					<select id="txtMetrica" name="txtMetrica" class="form-control">
						<option disabled selected></option>
						<option>Litro</option>
						<option>Metro</option>
						<option>Unidade</option>
						<option>Kilo</option>
					</select>
				</div>

				<div class="form-group">
					<label for="txtQtd">Quantidade:</label>
					<input id="txtQtd" name="txtQtd" type="number" class="form-control"/>
				</div>

				<div class="form-group">
					<label for="txtPreco">Preço Unitário:</label>
					<input id="txtPreco" name="txtPreco" type="number" class="form-control"/>
				</div>
				<div class="form-group">
					<label>Vitaminas</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox"
							   name="txtVitaminas" id="txtVitaminaA" value="A">
						<label class="form-check-label" for="txtVitaminaA">A</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox"
							   name="txtVitaminas" id="txtVitaminaB" value="B">
						<label class="form-check-label" for="txtVitaminaB">B</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox"
							   name="txtVitaminas" id="txtVitaminaC" value="C">
						<label class="form-check-label" for="txtVitaminaC">C</label>
					</div>
				</div>
				<div class="form-group">
					<label>Organico</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio"
							   name="txtOrganico" id="txtOrgSim" value="sim">
						<label class="form-check-label" for="txtOrgSim">Sim</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio"
							   name="txtOrganico" id="txtOrgNao" value="nao" checked>
						<label class="form-check-label" for="txtOrgNao">Não</label>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="txtButton" value="adicionar" class="btn btn-primary">Adicionar</button>
					<button type="submit" name="txtButton" value="pesquisar" class="btn btn-primary">Pesquisar</button>
				</div>
			</div>
			<div class="container">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Metrica</th>
							<th>Quantidade</th>
							<th>Valor Unitário</th>
							<th>Vitaminas</th>
							<th>Orgânico</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($lista as $linha) {
						?>
						<tr>
							<td><?=$linha['nome']?></td>
							<td><?=$linha['metrica']?></td>
							<td><?=$linha['quantidade']?></td>
							<td><?=$linha['preco']?></td>
							<td><?=$linha['vitaminas']?></td>
							<td><?=$linha['organico']?></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</form>
	</body>

</html>
