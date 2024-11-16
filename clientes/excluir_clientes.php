<?php 
include '../conexao.php';
$id = $_GET['id'];

$sql = "delete from cliente where id = $id";
$excluir = mysqli_query($conexao, $sql);
    
if($excluir){
    echo "
    <script>
        alert('Cliente Exluido com Sucesso!');
        window.location = 'listar_clientes.php';
    </script>
    ";
}

?>
