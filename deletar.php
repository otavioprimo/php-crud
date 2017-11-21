<?php

include("./auxiliares/config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM produto WHERE id=$id");


header("Location:index.php");
?>

