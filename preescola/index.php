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
                                <li><a href="cadastro.php">Pessoa</a></li>
                                <li><a href="disciplina.php">Disciplina</a></li>
                                <li><a href="">Turma</a></li>
                                <li><a href="">Série</a></li>
                                <li><a href="profissao.php">Profissão</a></li>
                                <li><a href="religiao.php">Religião</a></li>
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
            
                <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>

