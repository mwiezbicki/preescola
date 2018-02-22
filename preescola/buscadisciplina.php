<?php
require 'config.php';

if(!empty($_POST['texto'])){
    $texto = strtoupper($_POST['texto']);
    
    $sql = "SELECT * FROM disciplina WHERE nm_disciplina LIKE :texto";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":texto", '%'.$texto.'%');
    $sql->execute();
    
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $disc){
            echo utf8_encode($disc['nm_disciplina'])." - ". $disc['sg_disciplina']."<br/>";
        }
    }
    
}