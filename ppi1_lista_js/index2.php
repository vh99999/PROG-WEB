<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    butes do php

    <?php
        echo "Chega meteoro ";
        $nome = "Rosa";
        echo $nome."<br>";
        $nota = 8;
    ?>
    <h2>Exemplo tipo de dados PHP</h2>

    <?php
    
    $a = 9;
    $b = 9;

    echo "<p>".$a + $b."</p>";
    
    ?>
    <p>
        <?php echo $a + $b ?>
    </p>
    <h2>Ternario é minha rola</h2>
    <?php 
        $situacao = $nota >= 6 ? "aprovado" : "reprovado";
        echo $situacao;
    ?>

    <h2>While </h2>
    <?php
        $i = 0;
        while($i < 10){
            $i++;
            echo "i = ".$i." - ";
        }
    
    ?>

    <h2>Array</h2>

    <?php
        $vetor = array(9,99,999,9999,99999);
        for ($posicao = 0; $posicao < count($vetor); $posicao++){
            echo $vetor[$posicao] . "<br />";
        }
    
    ?>
    <h2>Vetor com indice alfabetico</h2>
    <?php
        $vetor = array(
            'nome' => 'Gustavo',
            'sobrenome' => 'Gozeli',
            'cpf' => '123.456.789-00'
        );
        echo 'nome: ' . $vetor['nome'] . '<br />';
        echo 'sobrenome: ' . $vetor['sobrenome'] . '<br />';
        echo 'CPF: ' . $vetor['cpf'];
    
    ?>

    <h2>FOREACH PHP</h2>
    <?php
    
        foreach($vetor as $elemento){
            echo "Elemento: " . $elemento. " <br />";
        }
    
    ?>

    <h2>Variaveis de ambiente em PHP</h2>
    <?php
        echo "SERVER: " . var_dump($_SERVER) . "<br />";
        echo "$_GET: " . $_GET['nome'] . "<br />";
    
    ?>

</body>
</html>