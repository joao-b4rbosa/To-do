<?php 
require_once __DIR__ . '/sql/conexao.php';

$sql = 'SELECT * FROM tarefas';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$tarefas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($tarefas as $tarefa):?>
  <div class="tarefa">
    <div class="conteudo">
      <input type="checkbox" name="tarefa" id="" onchange="marcaTarefa(this)">
      <label for="tarefa"><?php echo $tarefa['nome']; ?></label>
    </div>
    <div class="links">
      <div class="link-1">
        <a href="../src/editar-tarefa.php?id=<?= $tarefa['id']; ?>"><i class="material-icons">create</i></a>
      </div>
      <div class="link-2">
        <a href="../src/deletar-tarefa.php?id=<?= $tarefa['id']; ?>"><i class="material-icons">delete</i></a>
      </div>
    </div>
  </div>
  <br>
<?php endforeach;?>
