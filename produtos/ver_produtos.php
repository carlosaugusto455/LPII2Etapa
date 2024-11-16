<?php

include '../conexao.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "select * from produto where id = $id";
    $editar = mysqli_query($conexao, $sql);
    $editado = mysqli_fetch_array($editar);

    $descricao = $editado['descricao'];
    $preco = $editado['preco'];
    $estoque = $editado['estoque'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ver Produto</title>
</head>
<body>
    
    <div class="container">
        <h1 class="mt-3 text-center"> <?= $descricao ?> </h1>
        <hr>
        <p><strong>Preco:</strong> <?= $preco ?> </p>
        <p><strong>Estoque:</strong> <?= $estoque ?> </p>

        <hr>

        <div class="row">
            <div class="col text-start">
                <a href="listar_produtos.php" class="btn btn-primary mt-5 shadow">Voltar</a>
            </div>
            <div class="col text-end">
                <a href="editar_produtos.php?id=<?=$id?>" class="btn btn-warning mt-5 shadow">Editar</a>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>

    <script>
      $(document).ready(function(){
        $('#telefone').mask('(00) 00000-0000');
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php

} else {//tratamento de erro e redirecionamento
    echo "
            <script>
                window.location = 'produtos.php';
            </script>
            ";
}

?>
