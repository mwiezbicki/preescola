<?php
require 'config.php';
require 'classes/religiao.class.php';

$r = new Religiao();
$religiao = $r->getLista();
?>
<html>
    <head>
        <title>Cadastro de Religião</title>
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
            <h3>Adicionar Religião</h3>
            <?php
            if (isset($_POST['religiao']) && !empty($_POST['religiao'])) {
                $nome = addslashes($_POST['religiao']);

                if (!empty($nome)) {
                    if ($r->cadastrar($nome)) {
                        ?>
                        <div class="alert alert-success">
                            Dados cadastrados com sucesso!
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-warning">
                            Esta religião já existe! 
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
                    <label for="religiao">Religião</label>
                    <input type="text" class="form-control" name="religiao" id="religiao" placeholder="Digite a Religião">
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
        <label id="labtitulo">Religiões Cadastradas</label>
        <div id="resultado">
            <table class="table table-bordered table-hover">
                <tr>
                    <td>Nome</td>
                    <td>Opções</td>
                </tr>
                <?php foreach ($religiao as $rel): ?>
                    <tr>
                        <td><?php echo $rel['religiao']; ?></td>
                        <td>
                            <a href="javascript:;" class="btn btn-warning" onclick="editar('<?php echo $rel['id']; ?>')">Editar</a>
                            <a href="javascript:;" class="btn btn-danger" onclick="excluir('<?php echo $rel['id']; ?>')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div id="modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">

                        </div>
                    </div>
                </div>
            </div>    

        </div>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>