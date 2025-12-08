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
            <h2>Edição de Cadastro</h2>
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

            <form action="editarUsuario.php" method="post">

                <div class="container2">
                    <label for="nome" ; style='margin:2px;'>Nome:</label>
                </div>

                <div class="container2">
                    <input type="text" id="nome" name="nome" value="<?= $nome ?>" required>
                </div>

                <div class="container2">
                    <label for="login" ; style='margin:3px;'>Login:</label>
                </div>

                <div class="container2">
                    <input type="text" id="login" name="login" value="<?= $login ?>" required>
                </div>

                <div class="container2">
                    <label for="senha">Senha:</label>
                </div>

                <input type="hidden" name="id" value="<?= $id ?>">

                <div class="container2">
                    <input type="password" id="senha" name="senha" value="<?= $senha ?>" required>
                </div>

                <input type="submit" value="Salvar" class="btnsalvar">
            </form>

        </div>
        <div class="containerExcluir">

            <form action="excluir_usuario.php" method="POST">

                <input type="hidden" name="id" value="<?= $id ?>">

                <button type="submit" class="gappy" onclick="return confirm('Tem certeza que deseja excluir?')">
                    Excluir
                </button>

            </form>
        </div>
    </div>
</body>

</html>