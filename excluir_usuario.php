<?php
    require_once "conexao.php";
    session_start();

    $id = $_POST["id"];
    
    delete_usuario($id);

    header ("Location: lista_usuarios.php");
    ?>