<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Campeonato</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div id="container">
        <h2>Login de Usuário</h2>
    </div> 
    <div id="container">
        <form action="cria_usuario.php" method="POST">
            <input type="text" name = "nome" placeholder="Nome completo"required><br><br>
            <input type="email" name="email" placeholder="E-mail" required><br><br>
            <input type="password" name="senha" placeholder="Senha" required><br><br>
            <button type="submit">Entrar</button>
        </form>
    </div>

</body>
</html>