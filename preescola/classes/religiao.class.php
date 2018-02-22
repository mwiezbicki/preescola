<?php

class Religiao {

    public function getLista() {
        $array = array();
        global $pdo;

        $sql = $pdo->query("SELECT * FROM religiao");
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

   
    public function cadastrar($nome) {
        global $pdo;
        $sql = $pdo->prepare("INSERT INTO religiao SET religiao = :nome");
        $sql->bindValue(":nome", $nome);
        $sql->execute();

        return true;
    }

}