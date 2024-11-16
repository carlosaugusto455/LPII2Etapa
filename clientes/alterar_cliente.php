<?php 
include '../conexao.php';

    if(isset($_REQUEST['nome'])) {
        //entrada
        $id = $_REQUEST['id'];
        $nome = trim($_REQUEST['nome']);
        $telefone = trim($_REQUEST['telefone']);
        $email = trim($_REQUEST['email']);
    
        //processamento
        $sql = "update cliente set nome = '$nome', telefone = '$telefone', email = '$email' where id= $id";
        $editar = mysqli_query($conexao,$sql);
    
        //saida
        if($editar) {
            echo "
            <script>
                alert('Cliente Editado com Sucesso!');
                window.location = 'listar_clientes.php';
            </script>
            ";
        }
    } else {
        echo "
            <script>
                window.location = 'clientes.php';
            </script>
            ";
    }
 

?>