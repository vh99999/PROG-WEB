<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_editar.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="containerVoltar">
            <button onclick="listagem()" class="gappy"><-- Voltar Para a Listagem</button>

                    <script>
                        function listagem() {
                            window.location.href = "lista_usuarios.php";
                        }
                    </script>
        </div>



        <div class="containerEdiçãodeCadastro">
            <h2>Visualização de Cadastro</h2>
        </div>
        <div class="containerEdicao">

            <?php
            require_once "conexao.php";
            $current_user = get_usuario($_GET['id']);

            $id = $current_user['id'];
            $nome = $current_user['nome'];
            $login = $current_user['login'];
            $senha = $current_user['senha'];
            ?>

            <div class="container2">
                <label for="nome" style="margin:2px;">Nome: <?php echo $nome; ?></label>
            </div>

            <div class="container2">
                <label for="login" ; style='margin:3px;'>Login: <?php echo $login; ?></label>
            </div>

            <div class="container2">
                <label for="senha">Senha: <?php echo $senha; ?></label>
            </div>

            <input type="hidden" name="id" value="<?= $id ?>">

        </div>
    </div>
</body>

</html>