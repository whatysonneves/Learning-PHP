<?php

// 
// IMPORTANTE !!!
// 
// para usar este script, importe o arquivo tabelaAluno.sql para o SQL.
// 

/*
Esta função inicia a conexão com o banco de dados
recebe três parâmetros, servidor, usuário e senha
estes dados são os padrões do Wampserver
*/
mysql_connect("localhost:3306", "root", "");
/*
esta classe mysql está obsoleta e será descontinuada do PHP
dependendo da versão do wampserver, gerará um Warning na tela
para que a mensagem de erro pare de aparecer , adicione um @ antes da função: @mysql_connect...
*/

/*
esta função é usada apenas para selecionar o banco de dados
funciona semelhante à query: USE aulaDePHP;
*/
mysql_select_db("aulaDePHP");

// Setando o Charset para UTF-8, resolve todos os problemas de charset
mysql_set_charset("UTF8");

// ----- INSERINDO (CREATE)

// Consulta simples de inserção de dados na tabela
// a função mysql_query() recebe apenas a query a ser executada e retorna um objeto que pode ser verificado como booleano
$consulta = "INSERT INTO aluno (id, nome, email, dtNasc) VALUES (NULL, 'Whatyson Neves', 'whatyson@promasters.net.br', '1994-07-07')";
// os campos do tipo DATE recebe no padrão AAAA-MM-DD
$inserir = mysql_query($consulta);

// se não houver nenhum problema com a inserção
if($inserir) {
	echo "Aluno inserido com sucesso<br>";
} else {
	echo "Erro ao inserir o aluno<br>";
}

// inserindo mais dados para o SELECT
mysql_query("INSERT INTO aluno (id, nome, email, dtNasc) VALUES (NULL, 'Maria', 'maria@email.com', '1995-01-01')");
mysql_query("INSERT INTO aluno (id, nome, email, dtNasc) VALUES (NULL, 'João', 'joao@email.com', '1995-01-01')");

// ----- PEGANDO OS DADOS (READ)

// esta consulta retorna um objeto com os dados solicitados
$alunos = mysql_query("SELECT * FROM aluno ORDER BY nome ASC");

// percorrer o objeto para exibir os dados
while($aluno = mysql_fetch_assoc($alunos)) {
	echo "Aluno do ID: ".$aluno["id"]."<br>";
	echo "Nome: ".$aluno["nome"]."<br>";
	echo "Email: ".$aluno["email"]."<br>";
	echo "<hr>";
}

// ----- ATUALIZAR (UPDATE)

// atualizar os dados da Maria
$atualiza = mysql_query("UPDATE aluno SET email = 'mariaNovoEmail@gmail.com' WHERE nome = 'Maria' LIMIT 1");

// verifica se foi executado com sucesso
if($atualiza) {
	echo "Aluna Maria atualizada com sucesso<br>";
} else {
	echo "Erro ao atualizar os dados<br>";
}

// ----- DELETAR DADOS (DELETE)

// apagar o aluno com o ID 3
$apagar = mysql_query("DELETE FROM aluno WHERE id = 3 LIMIT 1"); // id 3 = João

// verifica se foi executado com sucesso
if($apagar) {
	echo "O aluno foi apagado com sucesso<br>";
} else {
	echo "Erro ao apagar os dados<br>";
}

/*

Exemplo de CRUD criado por Whatyson Neves <whatyson@promasters.net.br>
Qualquer dúvida, entre em contato comigo !!

*/