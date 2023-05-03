<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>📋 Edita | TO-do List</title>
</head>
<body>
    
</body>
</html>

<section>
        <div class="centro">
            <div class="titulo">
                <h1>Atualizar | To-Do List</h1>
            </div>
            <form action="" method="post">
                <label for="tarefa">Atualizar Tarefa:</label>
                <input type="text" name="tarefa" id="tarefa">
                <div class="centralizar-botao">
                    <button name="submit" type="submit">Enviar</button>
                </div>
            </form>
        </div>
</section>


<?php 
require_once __DIR__ . '/sql/conexao.php';


$tarefa = filter_input(INPUT_POST, 'tarefa', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


if (isset($_GET['id'])){

    $id = $_GET['id'];


    if(empty($tarefa)){
        die();
    }

    $sql = 'UPDATE tarefas SET nome = :nova_tarefa WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nova_tarefa', $tarefa);
    $stmt->bindValue(':id', $id);
    $result = $stmt->execute();

    if($result){
        echo 
        "
            <script>
                alert('Tarefa Editada');
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

else{
    echo 
    "
        <script>
            alert('Prencha os campos');
            window.location.href = '../index.php';
        </script>
    ";
}

?>
