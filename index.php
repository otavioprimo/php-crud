<?php 
include('./auxiliares/header.php');
$result = mysqli_query($mysqli, "SELECT * FROM produto ORDER BY id DESC");
?>

<div class="container">
<a class="btn btn-primary" id="btn-novo-produto" href="adicionar_produto.php">Novo produto</a>

<table class="table table-striped" id="table-produtos">

<thead>
	<tr>
		<th>Produto</th>
		<th>Quantidade</th>
	</tr>
</thead>

<?php 
while ($res = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $res['description'] . "</td>";
	echo "<td>" . $res['amount'] . "</td>";
	echo "<td><a class='btn btn-warning' href=\"editar_produto.php?id=$res[id]\">Editar</a> <a class='btn btn-danger' href=\"deletar.php?id=$res[id]\" onClick=\"return confirm('Tem certeza que quer deletar este item?')\">Deletar</a></td>";
}
?>
	</table>
</div>
<?php include('./auxiliares/footer.php'); ?>

