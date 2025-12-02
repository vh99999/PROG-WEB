<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "conexao.php";
    session_start();

    if (!isset($_POST["username"]) || !isset($_POST["password"])) {
        header("Location: index.php?error=faltando_dados");
        exit();
    }

    $username = $_POST["username"];
    $password = $_POST["password"];


    $usuario = login_usuario($username, $password);

    if ($username === $usuario['login'] && $password === $usuario['senha']) {
        $_SESSION["username"] = $username;
        echo "<h2>Login bem-sucedido!</h2>";
        echo "<p>Bem-vindo, $username!</p>";
        header("Location: lista_usuarios.php");
    } else {
        $_SESSION["username"] = NULL;
        echo $usuario['login'];
        echo $usuario['senha'];
        header("Location: index.php?error=credenciais_invalidas");
        exit();
    }

    
    
    ?>



</body>

</html>