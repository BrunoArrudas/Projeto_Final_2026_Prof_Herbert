<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FreeManager</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <div class="logo">FreeManager</div>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="servicos.php">Serviços</a>
        <a href="cadastro.php">Cadastrar</a>
    </nav>
</header>

<section class="auth-container">

    <form action="processa_login.php" method="POST" class="auth-form">

        <h2>Entrar</h2>

        <input
            type="email"
            name="email"
            placeholder="Seu email"
            required
        >

        <input
            type="password"
            name="senha"
            placeholder="Sua senha"
            required
        >

        <button type="submit">
            Acessar
        </button>

        <p>
            Não possui conta?
            <a href="cadastro.php">Criar conta</a>
        </p>

    </form>

</section>

</body>
</html>