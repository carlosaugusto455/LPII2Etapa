<?php
    include "../conexao.php";

    $sql = "select * from cliente";
    $seleciona = mysqli_query($conexao, $sql);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>

    <div class="container">
        <h1 class="pb-2">Lista de Clientes</h1>  

        <div class="row mb-2 bg-primary text-light text-center p-1 rounded">
            <div class="col-1"> Id </div>
            <div class="col-3"> Nome </div>
            <div class="col-3"> Telefone </div>
            <div class="col-3"> Email </div>
            <div class="col-2"> Controle </div>
        </div>

        <?php
            while ($exibe = mysqli_fetch_array($seleciona)){
              $id = $exibe['id'];
        ?>

        <div class="row text-center p-1">
            <div class="col-1"> <?php echo $exibe['id'] ?> </div>
            <div class="col-3"> <?php echo $exibe['nome'] ?> </div>
            <div class="col-3"> <?php echo $exibe['telefone'] ?> </div>
            <div class="col-3"> <?php echo $exibe['email'] ?> </div>
            <div class="col-2 icones">
              <a href="ver_clientes.php?id=<?=$id?>">
                <img src="../img/ver.png" alt="ver">
              </a>

              <a href="editar_clientes.php?id=<?=$id?>">
                <img src="../img/editar.png" alt="editar">
              </a>

              <a href="excluir_clientes.php?id=<?=$id?>" onclick="return confirm('Confirma a Exclusão do Registro?')">
                <img src="../img/delete.png" alt="excluir">
              </a>
            </div>
        </div>

        <?php
            }
        ?>

        <a href="clientes.php" class="btn btn-primary mt-5 shadow">Voltar</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>