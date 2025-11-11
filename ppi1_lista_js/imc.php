<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["peso"]) && isset($_POST["altura"]) && isset($_POST["nome"]) && isset($_POST["email"])) {
        $peso = floatval($_POST["peso"]);
        $altura = floatval($_POST["altura"]);
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<h2>Resultado do IMC para $nome</h2>";
            echo "Email: $email<br>";
            echo "Peso: $peso kg<br>";
            echo "Altura: $altura m<br>";
            echo "IMC: " . number_format($imc, 2) . "<br>";

            if ($imc < 18.5) {
                echo "Classificação: Abaixo do peso";
            } elseif ($imc < 24.9) {
                echo "Classificação: Peso normal";
            } elseif ($imc < 29.9) {
                echo "Classificação: Sobrepeso";
            } else {
                echo "Classificação: Obesidade";
            }
        } else {
            echo "Altura inválida.";
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
    
    ?>
</body>
</html>