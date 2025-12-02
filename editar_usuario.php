<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_editar.css">
    <title>Document</title>
</head>
<body>
    <div class="containerVoltar">
        <button onclick="listagem()" class="gappy"><-- Voltar Para a Listagem</button>

                <script>
                    function listagem() {
                        window.location.href = "lista_usuarios.php";
                    }
                </script>
    </div>

    <div class="containerExcluir">
        <button onclick="excluir()" class="gappy">Excluir</button>

                <script>
                    function excluir() {
                        delete_usuario();
                    }
                </script>
    </div>

    <div class="containerEdiçãodeCadastro">
        <h2>Edição de Cadastro</h2>
    </div>
</body>
</html>