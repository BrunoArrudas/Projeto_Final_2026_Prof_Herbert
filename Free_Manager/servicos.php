<?php

include('conexao.php');

$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - FreeManager</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">

    <div class="logo">FreeManager</div>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="login.php">Entrar</a>
        <a href="cadastro.php">Cadastrar</a>
    </nav>

</header>

<section class="services-page">

    <h1>Freelancers Disponíveis</h1>

    <div class="service-cards">

        <?php while($usuario = $resultado->fetch_assoc()) { ?>

            <div class="service-card">

                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">

                <h3>
                    <?php echo $usuario['nome']; ?>
                </h3>

                <span>
                    <?php echo $usuario['profissao']; ?>
                </span>

                <p>
                    <?php echo $usuario['descricao']; ?>
                </p>

                <a href="perfil.php?id=<?php echo $usuario['id']; ?>">
                    Ver Perfil
                </a>

            </div>

        <?php } ?>

    </div>

</section>

</body>
</html>