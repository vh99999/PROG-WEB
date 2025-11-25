<?php

    function connecta_bd() {
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "webti";

        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
   // connecta_bd();

    function cadastra_usuario($nome, $login, $senha) {
        $conn = connecta_bd();
        $statement = $conn->prepare("INSERT INTO usuarios (nome, login, senha) VALUES (:nome, :login, :senha)");
        $statement->bindParam(':nome', $nome);
        $statement->bindParam(':login', $login);
        $statement->bindParam(':senha', $senha);
        return $statement->execute();
    }
    //exemplo cadastro
    //cadastra_usuario("João Silva", "joao", "senha123");

    function delete_usuario($id){
        $conn = connecta_bd();
        $statement = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
        $statement->bindparam(':id', $id);
        return $statement-> execute();
    }

    delete_usuario(4);

?>