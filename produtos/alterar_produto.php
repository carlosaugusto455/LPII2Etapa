<?php 
include '../conexao.php';

    if(isset($_REQUEST['descricao'])) {
        //entrada
        $id = $_REQUEST['id'];
        $descricao = trim($_REQUEST['descricao']);
        $preco = trim($_REQUEST['preco']);
        $estoque = trim($_REQUEST['estoque']);
    
        //processamento
        $sql = "update produto set descricao = '$descricao', preco = '$preco', estoque = '$estoque' where id= $id";
        $editar = mysqli_query($conexao,$sql);
    
        //saida
        if($editar) {
            echo "
            <script>
                alert('Produto Editado com Sucesso!');
                window.location = 'listar_produtos.php';
            </script>
            ";
        }
    } else {
        echo "
            <script>
                window.location = 'produtos.php';
            </script>
            ";
    }
 

?>