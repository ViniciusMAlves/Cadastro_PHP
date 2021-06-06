<?php
require_once("db.php");

$id = $_GET['id'];

$sqlDeExcluir = "DELETE FROM cadastro WHERE id = " . $id;

$queryDelete = mysqli_query($conexao, $sqlDeExcluir);
if (!$queryDelete) {
  echo 'Invalid query: ' . mysqli_error($queryDelete) . "\n";
  exit;
}

header("Location: main.php");
?>
