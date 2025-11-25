<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>

    <header>
        <h1>Cadastro de Usuário</h1>
        <nav>links</nav>
    </header>
    <div class="container">
        <form action="processa_cadastro.php" method="post">
            
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required><br><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>