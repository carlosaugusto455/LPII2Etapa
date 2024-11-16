<?php

include '../conexao.php';
$id = $_GET['id'];

$sql = "select * from aluno where id = $id";
$editar = mysqli_query($conexao, $sql);
$editado = mysqli_fetch_array($editar);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Aluno</title>
</head>
<body>
    
    <form class="container bg-primary p-4 rounded text-white mt-4" action="alterar_aluno.php">
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form1Example1" name="nome" class="form-control" value="<?=$editado['nome']?>"/>
            <label class="form-label" for="form1Example1">Nome</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="telefone" name="telefone" class="form-control" value="<?=$editado['telefone']?>"/>
            <label class="form-label" for="form1Example2">Telefone</label>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="cpf" name="cpf" class="form-control" value="<?=$editado['cpf']?>"/>
            <label class="form-label" for="form1Example2">CPF</label>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form1Example2" name="email" class="form-control" value="<?=$editado['email']?>"/>
            <label class="form-label" for="form1Example2">E-mail</label>
        </div>

        <input type="number" value="<?=$id?>" name='id' style="display: none;">

        <!-- Submit button -->
        <input type="submit" class="btn btn-dark btn-block">
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>

    <script>
      $(document).ready(function(){
        $('#telefone').mask('(00) 00000-0000');
        $('#cpf').mask('000.000.000-00');
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>