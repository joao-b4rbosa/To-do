<?php

require_once __DIR__ . '/sql/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = 'DELETE FROM tarefas WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $result = $stmt->execute();

    if($result){
        echo 
        "
            <script>
                alert('Tarefa Deletada');
                window.location.href = '../index.php';
            </script>
        ";
    }

    else {
        echo 
        "
            <script>
                alert('Id não fornecido');
                window.location.href = '../index.php';
            </script>
        ";
    }
}
