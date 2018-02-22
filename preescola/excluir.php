<?php
require 'config.php';
$id = $_POST['id'];
$pdo->query("DELETE FROM religiao WHERE id = '$id'");