<?php 
include '../conexao.php';

    if(isset($_REQUEST['nome'])) {
        //entrada
        $id = $_REQUEST['id'];
        $nome = trim($_REQUEST['nome']);
        $telefone = trim($_REQUEST['telefone']);
        $cpf = trim($_REQUEST['cpf']);
        $email = trim($_REQUEST['email']);
    
        //processamento
        $sql = "update aluno set nome = '$nome', telefone = '$telefone', cpf = '$cpf', email = '$email' where id= $id";
        $editar = mysqli_query($conexao,$sql);
    
        //saida
        if($editar) {
            echo "
            <script>
                alert('Aluno Editado com Sucesso!');
                window.location = 'listar_aluno.php';
            </script>
            ";
        }
    } else {
        echo "
            <script>
                window.location = 'alunos.php';
            </script>
            ";
    }
 

?>