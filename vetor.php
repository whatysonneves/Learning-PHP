<?php

// iniciando uma array
$vet01 = array();
// adicionando no índice 0 a string "Sistemas operacionais"
$vet01[] = "Sistemas operacionais";
// adicionando no índice 1 a string "Compiladores"
$vet01[] = "Compiladores";
$vet01[] = "Bancos de dados";

// iniciando uma array diretamente dentro da função array
$vet02 = array(1, 2, 3, 4, 5);

// iniciando uma array com índices distintos
$vet03 = array( 0 => 0, 2 => 3, 10 => "item 10");

// uma array no PHP pode ter quase qualquer tipo de índice
$vet04 = array( 0 => 0, 2 => 3, 10 => "item 10", "como_foi" => "seu dia");

for ($i = 0; $i < count($vet01); $i++) {
echo $vet01[$i] . "<br />";
}

// função 'padrão' para debugar o código
var_dump($vet01);

// altere a variável dentro da função var_dump para $vet02, $vet03 ... ou faça assim:
var_dump($vet01, $vet02, $vet03, $vet04);

?>