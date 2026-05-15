<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - FreeManager</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <div class="logo">FreeManager</div>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="servicos.php">Serviços</a>
        <a href="login.php">Ja tenho conta</a>
    </nav>
</header>

<section class="auth-container">

    <form action="processa_cadastro.php" method="POST" class="auth-form">

        <h2>Criar Conta</h2>

        <input
            type="text"
            name="nome"
            placeholder="Nome completo"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Seu email"
            required
        >

        <input
            type="text"
            name="profissao"
            placeholder="Profissão"
            required
        >

        <textarea
            name="descricao"
            placeholder="Descreva seus serviços"
            required
        ></textarea>

        <input
            type="password"
            name="senha"
            placeholder="Sua senha"
            required
        >

        <button type="submit">
            Criar Conta
        </button>

    </form>

</section>

</body>
</html>