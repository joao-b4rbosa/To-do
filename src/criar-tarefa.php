<?php 

require_once __DIR__ . '/sql/conexao.php';

echo "<br>" . "<br>";


// Previnindo xss
$tarefa = filter_input(INPUT_POST, 'tarefa', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if(isset($_POST['submit']) && !empty($_POST['tarefa']))
{
    $sql = 'INSERT INTO tarefas(nome) VALUES(:tarefa);';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':tarefa', $tarefa);
    $result = $stmt->execute();

    if($result){
        echo 
        "
            <script>
                alert('Tarefa adiconada!');
                window.location.href = '../index.php';
            </script>
        ";
    }

    else{
        echo 
        "
            <script>
                alert('[ERRO] FALHA AO ADICONAR TAREFA!');
                window.location.href = '../index.php';
            </script>
        ";
    }
}

else{
    echo 
    "
        <script>
            alert('Prencha todos os campos!');
            window.location.href = '../index.php';
        </script>
    ";
}

?>

