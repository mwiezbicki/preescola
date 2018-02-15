<?php
require 'config.php';
?>
<html>
    <head>
        <title>Sistema da Preescola</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <style type="text/css">
            .fontes {
                font-size: 12px;
            }
            td {
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="container" style="margin-top:70px">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="" style="color:white">MinhaEmpresa.com</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Cadastro<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="cadastro.php">Aluno</a></li>
                                <li><a href="">Disciplina</a></li>
                                <li><a href="">Turma</a></li>
                                <li><a href="">Série</a></li>
                            </ul>
                        </li>
                        <li><a href="">Matricula</a></li>
                        <li><a href="">Pesquisa</a></li>
                        <li><a href="">Relatório</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">Logout</a></li>
                    </ul>
                </div>

            </nav>
            <div class="container">
                <h1>Lista de Alunos</h1>
                <table class="table table-bordered table-striped table-condensed">
                    <tr>
                        <th>RA</th>
                        <th>Nome</th>
                        <th>ID</th> 
                        <th>Ações</th>
                    </tr>

                    <?php
                    $total = 0;
                    $sql = "SELECT COUNT(*) as c FROM aluno";
                    $sql = $pdo->query($sql);
                    $sql = $sql->fetch(); //Fetch porque so vai pegar um resultado o count
                    $total = $sql['c']; //crio uma viaravel como total
                    $paginas = ceil($total / 20); // Divido o total pelo limite por pagina

                    $pg = '1';
                    if (isset($_GET['p']) && !empty($_GET['p'])) {
                        $pg = addslashes($_GET['p']);
                    }
                    $p = ($pg - 1) * 20;
                    //crio formula para a paginacao do limite de quanto a quanto

                    $sql = "SELECT cd_aluno, nm_aluno, id FROM aluno LIMIT $p, 20";
                    $sql = $pdo->query($sql);

                    if ($sql->rowCount() > 0) {
                        foreach ($sql->fetchAll() as $l):
                            ?>
                            <tr>
                                <td><?php echo $l['cd_aluno']; ?></td>
                                <td><?php echo utf8_encode(ucwords(strtolower($l['nm_aluno']))); ?></td>
                                <td><?php echo $l['id']; ?></td>
                                <td><button class="btn btn-xs btn-warning">Alterar</button><button class="btn btn-xs btn-danger">Excluir</button></td>
                            </tr>
                            <?php
                        endforeach;
                    }
                    ?>
                </table>
                <?php
                //Uso o for para criar a paginacao em si
                for ($q = 0; $q < $paginas; $q++) {
                    echo '<ul class="pagination">';
                    echo '<li><a href="./?p=' . ($q + 1) . '">' . ($q + 1) . '</a></li>';
                    echo '</ul>';
                }
                ?>
                <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <script type="text/javascript" src="js/script.js"></script>
            </div>
    </body>
</html>

