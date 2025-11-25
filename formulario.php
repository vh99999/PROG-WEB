<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulário de Cadastro</h2>

    <?php
    if (isset($_SESSION["username"])) {
        echo "<p>Usuário logado: " . htmlspecialchars($_SESSION["username"]) . "</p>";
    } else {
        header ("Location: login.php?error=nao_logado");
        exit();
    }
    if(isset($_GET["nome"])) {
        $_SESSION["nome"] = ($_GET["nome"]);
        echo "<p>Nome salvo na sessão: " . htmlspecialchars($_SESSION["nome"]) . "</p>";
    }



    if (isset($_GET["error"])) {
        $error = $_GET["error"];
        if ($error == "faltando_dados") {
            echo "<p style='color:red;'>Erro: Faltando dados no formulário.</p>";
        } elseif ($error == "valores_invalidos") {
            echo "<p style='color:red;'>Erro: Valores inválidos fornecidos.</p>";
        }
    }


    
    
    
    ?>

    <form action="imc.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso" required><br><br>

        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" step="0.01" required><br><br>

        <input type="submit" value="Enviar">
</body>
</html>