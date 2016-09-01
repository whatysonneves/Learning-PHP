<?php

echo "abc<br />";               # Escrever abc<br />
print "abc<br />";              # Realiza o mesmo que "echo"
$res = print "abc<br />";       # retorna se foi executado com sucesso saída ou não (0 ou 1) Coisa que o echo não faz.

$x = 2;                         // Variáveis
if ($x >= 1 && $x < 3) {        // se a variavel $x for maior ou igual a 1 E(AND) menor que 3
	echo "Olá Usuário Tekset!"; // escreve "Olá Usuário Tekset!"
} else {                        // Se não... 
	print("Relatório!");        // escreve "Relatório!", print e echo podem ser usados com ou sem parênteses.
}

// A acentuação desta página irá ter problema
// Veja mais em charset.php

?>