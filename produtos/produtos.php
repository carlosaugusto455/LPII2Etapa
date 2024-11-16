<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Produto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listar_produtos.php">Lista de Produtos</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <h1 class="text-center mt-5">Cadastro</h1>
  <form class="container" name="cliente" action="cadastrar_produtos.php" method="get">
    <div class="mb-3 ">
      <label for="nome" class="form-label">Descricao</label>
      <input type="text" class="form-control" name="descricao" id="descricao" required>
    </div>
    <div class="mb-3">
      <label for="telefone" class="form-label">Preco</label>
      <input type="number" class="form-control" name="preco" id="preco" step="0.1" min="0" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Estoque</label>
      <input type="number" class="form-control" name="estoque" id="estoque" min="0" required>
    </div>
    <div class="mb-3 text-end">
      <button type="submit" class="btn btn-warning">Cadastrar</button>
      <button type="reset" class="btn btn-danger">Limpar</button>
    </div>



  </form>

  <footer>

  </footer>


  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $('#telefone').mask('(00) 00000-0000');
    });
  </script>
</body>

</html>