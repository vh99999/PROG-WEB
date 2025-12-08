<?php
require_once "conexao.php";
session_start();

$id = $_POST["id"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];

update_usuario($id, $nome, $login, $senha);

echo var_dump($id);
echo var_dump($nome);
echo var_dump($login);
echo var_dump($senha);


header("Location: lista_usuarios.php");
?>