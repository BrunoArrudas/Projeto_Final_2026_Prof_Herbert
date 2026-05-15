<?php

include('conexao.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $profissao = trim($_POST['profissao']);
    $descricao = trim($_POST['descricao']);
    $senha = $_POST['senha'];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios
    (nome, email, profissao, descricao, senha)
    VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        'sssss',
        $nome,
        $email,
        $profissao,
        $descricao,
        $senhaHash
    );

    if($stmt->execute()){

        header('Location: login.php');

    } else {

        echo 'Erro ao cadastrar usuário';

    }

}

?>