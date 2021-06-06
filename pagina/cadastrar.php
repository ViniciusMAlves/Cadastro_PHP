<?php
    require_once("db.php");

    $name = $_POST['nome'];
    $email = $_POST['email'];
    $area = $_POST['area'];

    $sqlDeInserir = "INSERT INTO cadastro (nome, email, area) VALUE('" . $name ."', '" . $email ."', '" . $area ."')";

    $queryInsert = mysqli_query($conexao, $sqlDeInserir);
    if (!$queryInsert) {
    echo 'Invalid query: ' . mysqli_error($queryInsert) . "\n";
    exit;
    }

    header("Location: main.php");
?>