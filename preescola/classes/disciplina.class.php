<?php

class Disciplina {

    public function getLista() {
        $array = array();
        global $pdo;

        $sql = $pdo->query("SELECT * FROM disciplina");
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

   
    public function cadastrar($nm_disciplina, $sg_disciplina) {
        global $pdo;
        $sql = $pdo->prepare("INSERT INTO disciplina SET nm_disciplina =:disciplina, sg_disciplina = :sigla");
        $sql->bindValue(":disciplina", $nm_disciplina);
        $sql->bindValue(":sigla",$sg_disciplina);
        $sql->execute();

        return true;
    }

}