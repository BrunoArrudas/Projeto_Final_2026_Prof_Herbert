<?php

include('conexao.php');

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

$resultado = $stmt->get_result();

$usuario = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - FreeManager</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">

    <div class="logo">FreeManager</div>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="servicos.php">Serviços</a>
    </nav>

</header>

<section class="perfil-container">

    <div class="perfil-card">

        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">

        <h1>
            <?php echo $usuario['nome']; ?>
        </h1>

        <h3>
            <?php echo $usuario['profissao']; ?>
        </h3>

        <p>
            <?php echo $usuario['descricao']; ?>
        </p>

        <a href="mailto:<?php echo $usuario['email']; ?>" class="btn-primary">
            Entrar em Contato
        </a>

    </div>

</section>

</body>
</html>