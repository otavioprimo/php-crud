<?php include('auxiliares/header.php');

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM produto WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$description = $res['description'];
	$amount = $res['amount'];
}
?>
	<div class="container">
		<a href="index.php" id="btn-home"><span class="glyphicon glyphicon-home"></span> Voltar</a>


		<form action="editar.php" method="post" name="form-novo-produto" id="form-novo">
			<div class="form-group" id="div-form">
				<label for="description">Descrição do produto:</label>
				<input type="text" class="form-control" id="input-descricao" required name="description" value="<?php echo $description;?>">
			</div>
			<div class="form-group" id="div-form">
				<label for="amount">Quantidade:</label>
				<input type="number" class="form-control" id="input-senha" 
					min="1"
					step="1"
					onkeypress="return event.charCode >= 48 && event.charCode <= 57" required name="amount" value="<?php echo $amount;?>">
			</div>
			<input type="hidden" required name="id" value="<?php echo $id;?>">
			<button type="submit" class="btn btn-primary" id="btn-editar">EDITAR</button>
		</form>
	</div>
<?php include('./auxiliares/footer.php'); ?>
