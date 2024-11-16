<?php
    include "../conexao.php";

    if(isset($_REQUEST['descricao'])){
        //entrada
        $descricao = ucwords(trim($_REQUEST['descricao']));
        $preco = trim($_REQUEST['preco']);
        $estoque = trim($_REQUEST['estoque']);

        //processamento
        $sql = "insert into produto(descricao, preco, estoque) values ('$descricao','$preco','$estoque')";
        $cadastrar = mysqli_query($conexao,$sql);

        //saida
        if($cadastrar) {
            echo "
            <script>
                alert('Produto Cadastrado com Sucesso!');
                window.location = 'listar_produtos.php';
            </script>
            ";
        }
    } else{
        echo "
            <p> Esta é uma pagina de tratamento, vem pra <a href='produtos.php'>cá</a> vem </p>
        ";
    }

?>