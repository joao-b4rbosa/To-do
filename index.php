<?php  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./style/lista.css">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./src/js/index.js"></script>
    <title>📋 To-do List</title>
</head>
<body>
    <section>
        <div class="centro">
            <div class="titulo">
                <h1>To-Do List</h1>
            </div>
            <form action="./src/criar-tarefa.php" method="post">
                <label for="tarefa">Adicionar Tarefa:</label>
                <input type="text" name="tarefa" id="tarefa">
                <div class="centralizar-botao">
                    <button name="submit" type="submit">Enviar</button>
                </div>
                <br>
                <hr>
                <?php require_once './src/listar-tarefas.php';?>
                <br>
            </form>
        </div>
    </section>
</body>
</html>