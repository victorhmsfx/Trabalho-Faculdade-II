<?php

// Define o tipo da resposta como JSON
header('Content-Type: application/json');

// Retorna os dados do arquivo JSON
echo file_get_contents("jogos.json");

?>