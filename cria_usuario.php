<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se todos os campos foram preenchidos
    if (!empty($nome) && !empty($email) && !empty($senha)) {
        // Criptografa a senha
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $resultado = $stmt->execute([$nome, $email, $senhaCriptografada]);

        if ($resultado) {
            echo "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
        } else {
            echo "<p style='color:red;'>Erro ao cadastrar usuário.</p>";
        }
    } else {
        echo "<p style='color:red;'>Preencha todos os campos.</p>";
    }
}
?>