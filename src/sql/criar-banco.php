<?php 

// Conexão com o banco de dados SQLite
$db = __DIR__ . '/bd.sqlite';
$pdo = new PDO('sqlite:' . $db);

// Criação da tabela

try{
    $pdo->exec('CREATE TABLE tarefas (id INTEGER PRIMARY KEY, nome TEXT)');
    echo "Banco criado com sucesso";
}

catch(PDOException $e){
    echo "Erro:" . $e->getMessage();
}
