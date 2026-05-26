<?php

// Pega os jogos já cadastrados
$jogos = json_decode(file_get_contents("jogos.json"), true);

// Cria um novo jogo com os dados do formulário
$novoJogo = [

    "nome" => $_POST['nome'],
    "imagem" => $_POST['imagem'],
    "ano" => $_POST['ano'],
    "descricao" => $_POST['descricao'],
    "genero" => $_POST['genero'],
    "empresa" => $_POST['empresa'],
    "nota" => $_POST['nota']

];

// Adiciona o novo jogo ao array
$jogos[] = $novoJogo;

// Atualiza o arquivo JSON
file_put_contents(
    "jogos.json",
    json_encode($jogos, JSON_PRETTY_PRINT)
);

// Retorna para a página admin
header("Location: admin.php");

?>