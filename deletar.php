<?php

// Lê os jogos cadastrados
$jogos = json_decode(file_get_contents("jogos.json"), true);

// Recebe o ID enviado pela URL
$id = $_GET['id'];

// Remove o jogo selecionado
unset($jogos[$id]);

// Reorganiza os índices do array
$jogos = array_values($jogos);

// Atualiza o arquivo JSON
file_put_contents(
    "jogos.json",
    json_encode($jogos, JSON_PRETTY_PRINT)
);

// Volta para o painel admin
header("Location: admin.php");

?>