<?php
require 'config.php';

if(!empty($_POST['texto'])){
    $texto = strtoupper($_POST['texto']);
    
    $sql = "SELECT * FROM religiao WHERE religiao LIKE :texto";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":texto", '%'.$texto.'%');
    $sql->execute();
    
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $rel){
            echo utf8_encode($rel['religiao'])."<br/>";
        }
    }
    
}