<?php

include '../conexao.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "select * from aluno where id = $id";
    $editar = mysqli_query($conexao, $sql);
    $editado = mysqli_fetch_array($editar);

    $nome = $editado['nome'];
    $telefone = $editado['telefone'];
    $cpf = $editado['cpf'];
    $email = $editado['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ver Aluno</title>
</head>
<body>
    
    <div class="container">
        <h1 class="mt-3 text-center"> <?= $nome ?> </h1>
        <hr>
        <p><strong>Telefone:</strong> <?= $telefone ?> </p>
        <p><strong>CPF:</strong> <?= $cpf ?> </p>
        <p><strong>Email:</strong> <?= $email ?> </p>

        <hr>

        <div class="row">
            <div class="col text-start">
                <a href="listar_aluno.php" class="btn btn-primary mt-5 shadow">Voltar</a>
            </div>
            <div class="col text-end">
                <a href="editar_aluno.php?id=<?=$id?>" class="btn btn-warning mt-5 shadow">Editar</a>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php

} else {//tratamento de erro e redirecionamento
    echo "
            <script>
                window.location = 'alunos.php';
            </script>
            ";
}

?>
