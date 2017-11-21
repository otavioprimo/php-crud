
<?php
include_once("auxiliares/header.php");


	$description = mysqli_real_escape_string($mysqli, $_POST['description']);
	$amount = mysqli_real_escape_string($mysqli, $_POST['amount']);

	$result = mysqli_query($mysqli, "INSERT INTO produto(description,amount) VALUES('$description','$amount')");

	header("Location: index.php");


?>
<?php include('auxiliares/footer.php'); ?>