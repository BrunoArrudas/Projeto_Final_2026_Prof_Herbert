<?php

include('conexao.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $empresa = trim($_POST['empresa']);
    $email = trim($_POST['email']);
    $cnpj = trim($_POST['cnpj']);
    $descricao = trim($_POST['descricao']);
    $senha = $_POST['senha'];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO empresas
    (empresa, email, cnpj, descricao, senha)
    VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        'sssss',
        $empresa,
        $email,
        $cnpj,
        $descricao,
        $senhaHash
    );

    if($stmt->execute()){

        header('Location: login_empresa.php');

    } else {

        echo 'Erro ao cadastrar empresa';

    }

}

?>