<?php
require 'config.php';
require 'classes/profissao.class.php';

$p = new Profissao();
?>
<html>
    <head>
        <title>Cadastro de Profissões</title>
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
            <h3>Adicionar Profissão</h3>
            <?php
            if (isset($_POST['nm_profissao']) && !empty($_POST['nm_profissao'])) {
                $nome = addslashes($_POST['nm_profissao']);


                if (!empty($nome)) {
                    if ($p->cadastrar($nome)) {
                        ?>
                        <div class="alert alert-success">
                            Dados cadastrados com sucesso!
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-warning">
                            Esta profissão já existe! 
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning">
                        Preencha todos o campo!
                    </div>
                    <?php
                }
            }
            ?>
            <form method="POST">
                <hr />

                <div class="form-group">
                    <label for="profissao">Profissão</label>
                    <input type="text" class="form-control" name="nm_profissao" id="busca" placeholder="Digite a Profissão">
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
        <label id="labtitulo">Profissões Cadastradas</label>
        <div id="resultado">
            

        </div>
       
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>