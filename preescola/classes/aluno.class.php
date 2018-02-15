<?php
class Alunos {

	public function getLista() {
		$array = array();
                global $pdo;
                
		$sql = $pdo->query("SELECT * FROM aluno");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();

		}
		return $array;
	}
}

?>

