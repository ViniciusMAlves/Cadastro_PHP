<?php require_once("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='style/style.css'>
</head>
<body>
    <?php require_once("menu.php"); ?>
    <form action="cadastrar.php" method="post">
        <div class = "cad">
            <label for="nomefunc">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="nome do funcionario" class="form-control" />
            <label for="emailfunc">E-mail</label>
            <input type="text" id="email" name="email" placeholder="e-mail do funcionario" class="form-control" />
            <label for="areafunc">CPF</label>
            <input type="text" id="cpf" name="cpf" placeholder="CPF do funcionario" class="form-control" />
            <label for="areafunc">Idade</label>
            <input type="text" id="idade" name="idade" placeholder="idade do funcionario" class="form-control" />
            <label for="areafunc">Area de atuação</label>
            <input type="text" id="area" name="area" placeholder="Area de atuação do funcionario" class="form-control" />
        </div>
        <button class="btn btn-primary btn-lg">Cadastrar</button>
    </form>
    <?php require_once("rodape.php") ?>
</body>
</html>