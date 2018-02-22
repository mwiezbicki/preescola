<?php
require 'config.php';
require 'classes/disciplina.class.php';

$d = new Disciplina();
?>
<html>
    <head>
        <title>Cadastro de Disciplinas</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <style>
            #labtitulo {
                margin-left: 30px;
            }
            #resultado {
                margin-left: 30px;
            }
        </style>
    </head>
    <body>
        <div id="main" class="container-fluid">
            <h3>Adicionar Disciplinas</h3>
            <?php
            if (isset($_POST['nm_disciplina']) && !empty($_POST['nm_disciplina'])) {
                $nome = addslashes($_POST['nm_disciplina']);
                $sigla = addslashes($_POST['sg_disciplina']);


                if (!empty($nome)) {
                    if ($d->cadastrar($nome, $sigla)) {
                        ?>
                        <div class="alert alert-success">
                            Dados cadastrados com sucesso!
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning">
                        Preencha o campo!
                    </div>
                    <?php
                }
            }
            ?>
            <form method="POST">
                <hr />
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="disciplina">Disciplina</label>
                        <input type="text" class="form-control" name="nm_disciplina" id="busca2" placeholder="Digite a Disciplina">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sigla">Disciplina</label>
                        <input type="text" class="form-control" name="sg_disciplina" placeholder="Sigla">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <hr />
                    </div>
                </div>    
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>

            </form>

        </div>
        <label id="labtitulo">Disciplinas Cadastradas</label>
        <div id="resultado">


        </div>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>