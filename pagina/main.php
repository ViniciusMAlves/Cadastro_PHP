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
            </thead>
            <tbody>
                <?php   
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<tr> <td>" . $row["id"] . "</td> <td>" . $row["nome"] ."</td> <td>" . $row["email"] ."</td> <td>" . $row["area"] ."</td> <td> | <a href='excluir.php?id=" . $row["id"] . "'>Excluir</a></td </tr>";
                    }
                ?>
            </tbody>
        </table>

        <ul>
        
        </ul>
    </div>    
    <form action="cadastrar.php" method="post">
        <div class = "cad">
            <label for="nomefunc">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="nome do funcionario" class="form-control" />
            <label for="emailfunc">E-mail</label>
            <input type="text" id="email" name="email" placeholder="e-mail do funcionario" class="form-control" />
            <label for="areafunc">Area de atuação</label>
            <input type="text" id="area" name="area" placeholder="Area de atuação do funcionario" class="form-control" />
        </div>
        <button class="btn btn-primary btn-lg">Cadastrar Curso</button>
    </form>
    <br />
    <?php require_once("rodape.php") ?>
</body>
</html>