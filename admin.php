<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel Administrativo</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Título da página -->
    <header>

        <h1>Painel Administrativo</h1>

    </header>

    <!-- Formulário de cadastro -->
    <section class="formulario">

        <form action="salvar.php" method="POST">

            <!-- Nome do jogo -->
            <input type="text" name="nome" placeholder="Nome do jogo" required>

            <!-- URL da imagem -->
            <input type="text" name="imagem" placeholder="URL da imagem" required>

            <!-- Ano do jogo -->
            <input type="number" name="ano" placeholder="Ano" required>

            <!-- Descrição -->
            <textarea name="descricao" placeholder="Descrição do jogo"></textarea>

            <!-- Gênero -->
            <input type="text" name="genero" placeholder="Gênero">

            <!-- Empresa -->
            <input type="text" name="empresa" placeholder="Empresa">

            <!-- Nota -->
            <input type="text" name="nota" placeholder="Nota">

            <!-- Botão de cadastro -->
            <button type="submit">
                Cadastrar Jogo
            </button>

        </form>

    </section>

    <!-- Lista de jogos cadastrados -->
    <section class="lista-admin">

        <?php

        // Lê o arquivo JSON
        $dados = json_decode(file_get_contents("jogos.json"), true);

        // Percorre todos os jogos
        foreach ($dados as $index => $jogo) {

            echo "

            <div class='admin-card'>

                <img src='{$jogo['imagem']}'>

                <h3>{$jogo['nome']}</h3>

                <a class='delete-btn' href='deletar.php?id=$index'>
                    Deletar
                </a>

            </div>

            ";
        }

        ?>

    </section>

</body>

</html>