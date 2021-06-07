<?php
    require_once("db.php");

    $id = $_GET['id'];
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $area = $_POST['area'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];

    $sqlDeUpdate = "UPDATE cadastro SET nome = '" . $name ."', email = '" . $email ."', area = '" . $area ."', cpf = '" . $cpf ."', idade = '" . $idade ."' WHERE id = " . $id;

    $sqlUpdate = mysqli_query($conexao, $sqlDeUpdate);
    if (!$sqlUpdate) {
        echo 'Invalid query: ' . mysqli_error($sqlUpdate) . "\n";
        exit;
    }

    header("Location: main.php");

    
?>