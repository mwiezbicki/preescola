<?php

class Pessoas {

    public function getLista() {
        $array = array();
        global $pdo;

        $sql = $pdo->query("SELECT * FROM pessoa WHERE id_pessoa = '1' ");
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

   
    public function cadastrar($nome, $data_cadastro, $data_nascimento, $id_sexo, $id_pessoa, $id_aluno, $cpf, $rg, $id_profissao, $email, $nm_empresa, $end_comercial, $id_instrucao, $tel_comercial, $endereco, $numero, $complemento, $bairro, $id_religiao, $resp_finan, $pais, $id_estado, $municipio, $cep, $celular, $celularoutro) {
        global $pdo;
//		$sql = $pdo->prepare("SELECT id FROM pessoa WHERE cpf = :cpf");
//		$sql->bindValue(":cpf", $cpf);
//		$sql->execute();
//
//		if($sql->rowCount() == 0){
        $sql = $pdo->prepare("INSERT INTO pessoa SET "
                . "nome = :nome, dt_cadastro = :dt_cadastro, dt_nascimento = :dt_nascimento,"
                . "id_sexo = :sexo, id_pessoa = :tipo_pessoa, id_aluno = :nomealuno, cpf = :cpf,"
                . "rg = :rg, id_profissao = :profissao, email = :email, nm_empresa = :empresa,"
                . "end_comercial = :enderecocom, id_instrucao = :instrucao, tel_comercial = :telefonecom,"
                . "endereco = :endereco ,numero = :numero, complemento = :complemento, bairro = :bairro,"
                . "id_religiao = :religiao, resp_finan = :respfinan, pais = :pais, id_estado = :estado,"
                . "municipio = :municipio, cep = :cep, celular = :celular, celularoutro = :celularoutro");

        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":dt_cadastro", $data_cadastro);
        $sql->bindValue(":dt_nascimento", $data_nascimento);
        $sql->bindValue(":sexo", $id_sexo);
        $sql->bindValue(":tipo_pessoa", $id_pessoa);
        $sql->bindValue(":nomealuno", $id_aluno);
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":rg", $rg);
        $sql->bindValue(":profissao", $id_profissao);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":empresa", $nm_empresa);
        $sql->bindValue(":enderecocom", $end_comercial);
        $sql->bindValue(":instrucao", $id_instrucao);
        $sql->bindValue(":telefonecom", $tel_comercial);
        $sql->bindValue(":endereco", $endereco);
        $sql->bindValue(":numero", $numero);
        $sql->bindValue(":complemento", $complemento);
        $sql->bindValue(":bairro", $bairro);
        $sql->bindValue(":religiao", $id_religiao);
        $sql->bindValue(":respfinan", $resp_finan);
        $sql->bindValue(":pais", $pais);
        $sql->bindValue(":estado", $id_estado);
        $sql->bindValue(":municipio", $municipio);
        $sql->bindValue(":cep", $cep);
        $sql->bindValue(":celular", $celular);
        $sql->bindValue(":celularoutro", $celularoutro);
        $sql->execute();

        return true;
//		} else {
//		    return false;
//		}
    }

}
?>