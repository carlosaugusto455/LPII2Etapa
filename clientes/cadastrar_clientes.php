<?php
    include "../conexao.php";

    if(isset($_REQUEST['nome'])){
        //entrada
        $nome = ucwords(trim($_REQUEST['nome']));
        $telefone = trim($_REQUEST['telefone']);
        $email = trim($_REQUEST['email']);

        //processamento
        $sql = "insert into cliente(nome,telefone,email) values ('$nome','$telefone','$email')";
        $cadastrar = mysqli_query($conexao,$sql);

        //saida
        if($cadastrar) {
            echo "
            <script>
                alert('Cliente Cadastrado com Sucesso!');
                window.location = 'listar_clientes.php';
            </script>
            ";
        }
    } else{
        echo "
            <p> Esta é uma pagina de tratamento, vem pra <a href='clientes.php'>cá</a> vem </p>
        ";
    }

?>