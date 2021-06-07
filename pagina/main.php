<?php require_once("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='style/style.css'>
</head>
<body>
    <?php require_once("menu.php"); ?>
    <div class="tabelaFunc">
        <p><strong>Lista de Funcionarios:</strong></p>
        <?php
            $query = mysqli_query($conexao, "SELECT * FROM cadastro ORDER BY nome ASC");

            if (!$query) {
                echo 'Invalid query: ' . mysqli_error($conexao) . "\n";
                exit;
            }
        ?>
        <table class="table table-bordered table-dark">
            <thead>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Função</th>
                <th scope="col">Idade</th>
                <th scope="col">CPF</th>
                <th scope="col">Ações</th>
            </thead>
            <tbody>
                <?php   
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<tr> <td>" . $row["id"] . "</td> 
                              <td>" . $row["nome"] ."</td> 
                              <td>" . $row["email"] ."</td> 
                              <td>" . $row["area"] ."</td> 
                              <td>" . $row["idade"] ."</td> 
                              <td>" . $row["cpf"] ."</td> 
                              <td>
                                <a href='excluir.php?id=" . $row["id"] . "' class='btn btn-danger btn-xs'>Excluir</a>
                                <a href='alteira_func.php?id=" . $row["id"] . "' class='btn btn-primary btn-xs'>Alteirar</a>
                              </td </tr>";
                    }
                ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-success" onclick="window.location.href = 'cadastro_func.php'">Cadastrar</button>
    </div> 
    <?php require_once("rodape.php") ?>
</body>
</html>