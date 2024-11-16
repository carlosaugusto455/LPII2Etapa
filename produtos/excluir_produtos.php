<?php 
include '../conexao.php';
$id = $_GET['id'];

$sql = "delete from produto where id = $id";
$excluir = mysqli_query($conexao, $sql);
    
if($excluir){
    echo "
    <script>
        alert('Produto Exluido com Sucesso!');
        window.location = 'listar_produtos.php';
    </script>
    ";
}

?>
