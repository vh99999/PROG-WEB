<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_login.css">
</head>

<body>

    <?php
    session_start();
    if (isset($_GET["error"])) {
        $error = $_GET["error"];
        if ($error == "faltando_dados") {
            echo "<p style='color:red; display:flex;flex-direction: column;align-items: center;justify-content: center;'>Erro: Faltando dados no formulário.</p>";
        } elseif ($error == "credenciais_invalidas") {
            echo "<p style='color:red;'>Erro: Usuário ou senha incorretos.</p>";
        } elseif ($error == "nao_logado") {
            echo "<p style='color:red;'>Erro: Você precisa estar logado para acessar esta página.</p>";
        }
    }
    ?>
    <div class="container">
        <h2 class="gappy">Login</h2>
    </div>
    <div class="container">

        <form action="autenticacao.php" method="post">

            <div class="container">
                <label for="Usuario">Login</label>
            </div>

            <div class="container">
                <input type="text" id="Usuario" name="username" required><br><br>
            </div>

            <div class="container">
                <label for="Senha">Senha</label>
            </div>

            <div class="container">
                <input type="password" id="Senha" name="password" required><br><br>
            </div>

            <div class="container">
                <input type="submit" value="Login">
            </div>

        </form>

        <div class="container">
            <button onclick="cadastro()" class="gappy">Cadastro</button>

            <script>
                function cadastro() {
                    window.location.href = "cadastro_usuario.php";
                }
            </script>
        </div>
    </div>


</body>

</html>