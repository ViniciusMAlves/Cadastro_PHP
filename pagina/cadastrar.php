<?php
    require_once("db.php");

    $name = $_POST['nome'];
    $email = $_POST['email'];
    $area = $_POST['area'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];

    $sqlDeInserir = "INSERT INTO cadastro (nome, email, area, cpf, idade) VALUE('" . $name ."', '" . $email ."', '" . $area ."', '" . $cpf ."', '" . $idade ."')";

    $queryInsert = mysqli_query($conexao, $sqlDeInserir);
    if (!$queryInsert) {
        echo 'Invalid query: ' . mysqli_error($queryInsert) . "\n";
        exit;
    }

    header("Location: main.php");
?>