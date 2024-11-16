<?php
    include "../conexao.php";

    if(isset($_REQUEST['nome'])){
        //entrada
        $nome = ucwords(trim($_REQUEST['nome']));
        $telefone = trim($_REQUEST['telefone']);
        $cpf = trim($_REQUEST['cpf']);
        $email = trim($_REQUEST['email']);

        //processamento
        $sql = "insert into aluno(nome,telefone,cpf,email) values ('$nome','$telefone','$cpf','$email')";
        $cadastrar = mysqli_query($conexao,$sql);

        //saida
        if($cadastrar) {
            echo "
            <script>
                alert('Aluno Cadastrado com Sucesso!');
                window.location = 'listar_aluno.php';
            </script>
            ";
        }
    } else{
        echo "
            <p> Esta é uma pagina de tratamento, vem pra <a href='alunos.php'>cá</a> vem </p>
        ";
    }

?>