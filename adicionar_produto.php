<?php include('auxiliares/header.php'); ?>
	<div class="container">
		<a href="index.php" id="btn-home"><span class="glyphicon glyphicon-home"></span> Inicio</a>


		<form action="inserir_produto.php" method="post" name="form-novo-produto" id="form-novo">
			<div class="form-group" id="div-form">
				<label for="description">Descrição do produto:</label>
				<input type="text" class="form-control" id="input-descricao" required name="description">
			</div>
			<div class="form-group" id="div-form">
				<label for="amount">Quantidade:</label>
				<input type="number" class="form-control" id="input-senha" 
					min="1"
					step="1"
					onkeypress="return event.charCode >= 48 && event.charCode <= 57" required name="amount">
			</div>
			<button type="submit" class="btn btn-primary" id="btn-salvar">SALVAR</button>
		</form>
	</div>
<?php include('./auxiliares/footer.php'); ?>
