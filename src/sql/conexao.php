<?php

$db = __DIR__ . '/bd.sqlite';
$pdo = new PDO('sqlite:' . $db);

if($pdo){
    echo "<script>console.log('Conectei')</script>";
}

else{
    echo "<script>console.log('Erro ao Conectar')</script>";
    die();
}
