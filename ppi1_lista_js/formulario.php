<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulário de Cadastro</h2>

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