<?php

# Isto é apenas um comentário
// Isto também é um comentário
/* comentário */

include("incluir.php");      // Inclui e executa um trecho opcional de código
include "incluir.php";       // Maneira alternativa, funciona apenas com include e require.
require("incluir.php");      // O mesmo que "include", porém pára a execução caso o arquivo não seja encontrado
require_once("incluir.php"); // O mesmo que require, mas evita que o trecho seja incluído novamente

?>