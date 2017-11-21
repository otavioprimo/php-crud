
<?php
include_once("auxiliares/header.php");

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$description = mysqli_real_escape_string($mysqli, $_POST['description']);
$amount = mysqli_real_escape_string($mysqli, $_POST['amount']);

$sql = "UPDATE produto SET description = '$description', amount = '$amount' WHERE id = '$id'";
$result = mysqli_query($mysqli, $sql);

header("Location: index.php");


?>
<?php include('auxiliares/footer.php'); ?>