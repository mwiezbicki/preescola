<?php

class Profissao {

    public function getLista() {
        $array = array();
        global $pdo;

        $sql = $pdo->query("SELECT * FROM profissao");
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

   
    public function cadastrar($nome) {
        global $pdo;
        $sql = $pdo->prepare("INSERT INTO profissao SET nome = :nome");

        $sql->bindValue(":nome", $nome);
        $sql->execute();

        return true;
    }

}
?>