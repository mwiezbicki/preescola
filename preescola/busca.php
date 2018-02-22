<?php
require 'config.php';

if(!empty($_POST['texto'])){
    $texto = strtoupper($_POST['texto']);
    
    $sql = "SELECT * FROM profissao WHERE nm_profissao LIKE :texto";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":texto", '%'.$texto.'%');
    $sql->execute();
    
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $prof){
            echo utf8_encode($prof['nm_profissao'])."<br/>";
        }
    }
    
}

