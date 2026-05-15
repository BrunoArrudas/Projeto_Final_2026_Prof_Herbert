<?php

session_start();

include('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM empresas WHERE email = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();

$resultado = $stmt->get_result();

if($resultado->num_rows > 0){

    $empresa = $resultado->fetch_assoc();

    if(password_verify($senha, $empresa['senha'])){

        $_SESSION['empresa'] = $empresa['empresa'];

        header('Location: painel_empresa.php');

    } else {

        echo 'Senha incorreta';

    }

} else {

    echo 'Empresa não encontrada';

}

?>