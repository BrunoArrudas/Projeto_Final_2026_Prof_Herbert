<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Empresa - FreeManager</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">

    <div class="logo">FreeManager</div>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="empresa_cadastro.php">Cadastrar Empresa</a>
    </nav>

</header>

<section class="auth-container">

    <form action="processa_login_empresa.php" method="POST" class="auth-form">

        <h2>Entrar como Empresa</h2>

        <input
            type="email"
            name="email"
            placeholder="Email empresarial"
            required
        >

        <input
            type="password"
            name="senha"
            placeholder="Senha"
            required
        >

        <button type="submit">
            Entrar
        </button>

    </form>

</section>

</body>
</html>