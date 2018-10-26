<html>
	<head>
		<link rel="stylesheet" href="./css/bootstrap.min.css"/>
		<script src="./js/bootstrap.min.js" type="text/javascript">
		</script>

		<style rel="stylesheet">
				.borda {
    				border: 3px solid #73AD21;
				}
		</style>
	</head>
	<body>
		<h1> Pet Shop </h1>

		<?php
			session_start();

			if (isset($_SESSION['MENSAGEM'])) {
					echo $_SESSION['MENSAGEM'];
					unset($_SESSION['MENSAGEM']);
			}

		?>

		<form action="./petshop_processa.php">
			<div class="container">
				<div class="form-group">
					<label class="form-label" for="txtNome">Nome</label>
					<input class="form-control" type="text" id="txtNome" name="txtNome"/>
        </div>
				<div class="form-group">
					<label class="form-label" for="txtRaca">Raça</label>
					<select class="form-control" id="txtRaca" name="txtRaca">
						<option>Vira Lata</option>
						<option>Labrador</option>
						<option>Akita</option>
						<option>Bulldog</option>
						<option>Chiuaua</option>
					</select>
            </div>
				<div class="form-group">
					<label class="form-label" for="txtNomeDono">Nome do Dono</label>
					<input class="form-control" type="text" id="txtNomeDono" name="txtNomeDono"/>
        </div>
				<div class="form-group">
					<label class="form-label" for="txtPeso">Peso</label>
					<input class="form-control" type="number" id="txtPeso" name="txtPeso"/>
            </div>
				<div class="form-group">
					<label class="form-label" for="txtNascimento">Nascimento</label>
					<input class="form-control" type="date" id="txtNascimento" name="txtNascimento"/>
        </div>
				<button class="btn btn-primary" type="submit" name="cmd" value="adicionar">Adicionar</button>
				<button class="btn btn-primary" type="submit" name="cmd" value="pesquisar">Pesquisar</button>
			</div>
		</form>
	</body>

</html>
