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
    <?php
        $id = $_GET['id'];
        

        $query = mysqli_query($conexao, "SELECT * FROM cadastro WHERE id = " . $id);

        if (!$query) {
            echo 'Invalid query: ' . mysqli_error($conexao) . "\n";
            exit;
        }
        $row = mysqli_fetch_assoc($query);
    ?>
    <?php require_once("menu.php"); ?>
    <?php  

    echo "
      <form action='alteirar.php?id=" . $row["id"] . "' method='post'>
            <div class = 'cad'>
              <label for='nomefunc'>Nome</label>
              <input value=" . $row["nome"] ."  type='text' id='nome' name='nome' placeholder='nome do funcionario' class='form-control' />
              <label for='emailfunc'>E-mail</label>
              <input value=" . $row["email"] ." type='text' id='email' name='email' placeholder='e-mail do funcionario' class='form-control' />
              <label for='areafunc'>CPF</label>
              <input value=" . $row["cpf"] ." type='text' id='cpf' name='cpf' placeholder='Area de atuação do funcionario' class='form-control' />
              <label for='areafunc'>Idade</label>
              <input value=" . $row["idade"] ." type='text' id='idade' name='idade' placeholder='Area de atuação do funcionario' class='form-control' />
              <label for='areafunc'>Area de atuação</label>
              <input value=" . $row["area"] ." type='text' id='area' name='area' placeholder='Area de atuação do funcionario' class='form-control' />
          </div>
          <button class='btn btn-primary btn-lg'>Alteirar</button>
      </form> ";
    ?>
    <?php require_once("rodape.php") ?>
    
</body>
</html>