<?php
sleep(2);
$id = $_POST['id'];
require 'config.php';

$sql = "SELECT * FROM religiao WHERE id = :id";
$sql = $pdo->prepare($sql);
$sql->bindValue(":id", $id);
$sql->execute();

if ($sql->rowCount() > 0) {
    $info = $sql->fetch();
    ?>
    <form method="POST" >
        <div class="form-group">
            <label for="religiao">Religião:</label>
            <input type="text" class="form-control" id="nome" value="<?php echo $info['religiao']; ?>">
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="id" value="<?php echo $info['id']; ?>">
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
        <a href="index.php" id="cancel" name="cancel" class="btn btn-danger">Cancelar</a>
    </form> <?php
} else {
    echo "Religião não cadastrada...";
}