<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    session_start();
    if (isset($_GET["error"])) {
        $error = $_GET["error"];
        if ($error == "faltando_dados") {
            echo "<p style='color:red;'>Erro: Faltando dados no formulário.</p>";
        } elseif ($error == "credenciais_invalidas") {
            echo "<p style='color:red;'>Erro: Usuário ou senha incorretos.</p>";
        } elseif ($error == "nao_logado") {
            echo "<p style='color:red;'>Erro: Você precisa estar logado para acessar esta página.</p>";
        }
    }
    ?>
    <form action="autenticacao.php" method="post">
        <label for="Usuario">Usuario:</label>
        <input type="text" id="Usuario" name="Usuario" required><br><br>

        <label for="Senha">Senha:</label>
        <input type="password" id="Senha" name="Senha" required><br><br>

        <input type="submit" value="Login">
    </form>

</body>
</html>