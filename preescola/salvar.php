<?php
require 'config.php';

$id = $_POST['id'];
$nome = $_POST['nome'];

$sql = ("UPDATE religiao SET religiao = :nome WHERE id = :id");
$sql = $pdo->prepare($sql);
$sql->bindValue(":nome", $nome);
$sql->bindValue(":id", $id);
$sql->execute();