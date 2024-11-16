<?php 
include '../conexao.php';
$id = $_GET['id'];

$sql = "delete from aluno where id = $id";
$excluir = mysqli_query($conexao, $sql);
    
if($excluir){
    echo "
    <script>
        alert('Aluno Exluido com Sucesso!');
        window.location = 'listar_aluno.php';
    </script>
    ";
}

?>
