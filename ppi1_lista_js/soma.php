<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="soma.php" method="get">
        <input type="number" name="a" placeholder="Digite o valor de A">
        <input type="number" name="b" placeholder="Digite o valor de B">
        <input type="submit" value="Calcular">
    </form>


    <?php
     if (isset($_GET["a"]) && isset($_GET["b"])) {
        echo "A: " . $_GET["a"];
        echo "<br />";
        echo "B: " . $_GET["b"];
        echo "<br />";
    echo "Soma: " . ($_GET["a"] + $_GET["b"]);
    } else {
        echo "<h2>Por favor, insira os valores de A e B.</h2>";
        
    }
    
    ?>

    

</body>
</html>