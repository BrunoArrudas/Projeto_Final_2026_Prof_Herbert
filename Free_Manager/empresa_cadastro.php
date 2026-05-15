<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Empresa - FreeManager</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">

    <div class="logo">FreeManager</div>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="servicos.php">Serviços</a>
        <a href="login_empresa.php">Ja tenho conta</a>
    </nav>

</header>

<section class="auth-container">

    <form action="processa_empresa.php" method="POST" class="auth-form">

        <h2>Cadastrar Empresa</h2>

        <input
            type="text"
            name="empresa"
            placeholder="Nome da empresa"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Email empresarial"
            required
        >

        <input
            type="text"
            name="cnpj"
            placeholder="CNPJ"
            required
        >

        <textarea
            name="descricao"
            placeholder="Descreva sua empresa"
            required
        ></textarea>

        <input
            type="password"
            name="senha"
            placeholder="Senha"
            required
        >

        <button type="submit">
            Criar Conta
        </button>

    </form>

</section>

</body>
</html>