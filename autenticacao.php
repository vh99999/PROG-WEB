<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    session_start();

    if (!isset($_POST["username"]) || !isset($_POST["password"])) {
       // header("Location: login.php?error=faltando_dados");
       
        exit();
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    if( $username === "1" && $password === "1" ) {
        $_SESSION["username"] = $username;
        echo "<h2>Login bem-sucedido!</h2>";
        echo "<p>Bem-vindo, $username!</p>";
    } else {
        $_SESSION["username"] = NULL;
        header("Location: login.php?error=credenciais_invalidas");
        exit();
    }


    ?>

    <form action="formulario.php" method="GET">
        <input type="text" name="nome">
        <input type="submit" value="Ir para o formulário">
    </form>

</body>
</html>