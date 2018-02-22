<?php
require 'config.php';
require 'classes/aluno.class.php';
require 'classes/profissao.class.php';

$c = new Pessoas();
$p = new Profissao();
$pessoa = $c->getLista();
$profissao = $p->getLista();
?>
<html>
    <head>
        <title>Cadastro de Pessoas</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    </head>
    <body>
        <div id="main" class="container-fluid">
            <h3>Adicionar Pessoa</h3>
            <?php
            if (isset($_POST['nome']) && !empty($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $data_cadastro = date('Y-m-d H:i:s');
                $data_nascimento = addslashes($_POST['dt_nascimento']);
                $id_sexo = addslashes($_POST['sexo']);
                $id_pessoa = addslashes($_POST['tipo_pessoa']);
                $id_aluno = addslashes($_POST['nomealuno']);
                $cpf = addslashes($_POST['cpf']);
                $rg = addslashes($_POST['rg']);
                $id_profissao = addslashes($_POST['profissao']);
                $email = addslashes($_POST['email']);
                $nm_empresa = addslashes($_POST['empresa']);
                $end_comercial = addslashes($_POST['enderecocom']);
                $id_instrucao = addslashes($_POST['instrucao']);
                $tel_comercial = addslashes($_POST['telefonecom']);
                $endereco = addslashes($_POST['endereco']);
                $numero = addslashes($_POST['numero']);
                $complemento = addslashes($_POST['complemento']);
                $bairro = addslashes($_POST['bairro']);
                $id_religiao = addslashes($_POST['religiao']);
                $resp_finan = addslashes($_POST['respfinan']);
                $pais = addslashes($_POST['pais']);
                $id_estado = addslashes($_POST['estado']);
                $municipio = addslashes($_POST['municipio']);
                $cep = addslashes($_POST['cep']);
                $celular = addslashes($_POST['celular']);
                $celularoutro = addslashes($_POST['celularoutro']);


                if (!empty($nome)) {
                    if ($c->cadastrar($nome, $data_cadastro, $data_nascimento, $id_sexo, $id_pessoa, $id_aluno, $cpf, $rg, $id_profissao, $email, $nm_empresa, $end_comercial, $id_instrucao, $tel_comercial, $endereco, $numero, $complemento, $bairro, $id_religiao, $resp_finan, $pais, $id_estado, $municipio, $cep, $celular, $celularoutro)) {
                        ?>
                        <div class="alert alert-success">
                            Dados cadastrados com sucesso!
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-warning">
                            Esta pessoa ja existe! 
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning">
                        Preencha todos os campos!
                    </div>
                    <?php
                }
            }
            ?>
            <form name="frmcpf" method="POST">
                <hr />
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" onkeyup="maiuscula(this)" placeholder="Nome">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="dt_cadastro">Data/Hora Cadastro</label>
                        <input type="text" class="form-control" name="dt_cadastro" id="dt_cadastro" value="<?php echo date('d/m/Y H:i'); ?>">
                    </div>
                </div>    
                <div class="form-group col-md-4">
                    <label for="dt_nascimento">Data Nascimento</label>
                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento">
                </div>
                <div class="form-group col-md-4">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" class="form-control" name="sexo">
                        <option selected value="1">Masculino</option>
                        <option value="2">Feminino</option>
                    </select>
                </div>  
                <div class="form-group col-md-4">
                    <label for="tipo_pessoa">Pessoa</label>
                    <select id="tipo_pessoa" onchange="optionCheck()" class="form-control" name="tipo_pessoa">
                        <option>Selecione</option>
                        <option value="1">Aluno</option>
                        <option value="2">Pai</option>
                        <option value="3">Mãe</option>
                        <option value="4">Responsável</option>
                    </select>
                </div>
                <div class="form-row" id="idDocumentos" style="display: none">
                    <div class="form-group col-md-12">
                        <label for="nomealuno">Aluno</label>
                        <select id="nomealuno"class="form-control" name="nomealuno">
                            <option selected value="0"></option>
                            <?php foreach ($pessoa as $p): ?>

                                <option value="<?php echo $p['id']; ?>"><?php echo $p['nome']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
                    </div>
                    <div class="form-group col-md-1">
                        <label>Validar CPF</label>
                        <input type="button" name="submit" value="Checar" class="btn btn-primary" onclick="VerificaCPF();">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" id="rg" name="rg" cplaceholder="Digite seu RG">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="profissao">Profissão</label>
                        <select id="profissao" class="form-control" name="profissao">
                            <option selected value="0"></option>
                            <?php foreach ($profissao as $prof) : ?>
                                <option value="<?php echo $prof['id_profissao']; ?>"><?php echo utf8_encode($prof['nm_profissao']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu E-mail">
                    </div>
                </div>

                <div class="form-row" id="idDocumentosOutros" style="display: none">
                    <div class="form-group col-md-3">
                        <label for="empresa">Empresa</label>
                        <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Digite empresa aonde trabalha">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="enderecocom">Endereço Comercial</label>
                        <input type="text" class="form-control" id="enderecocom" name="enderecocom" placeholder="Digite o endereço comercial">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="instrucao">Grau de Instrução</label>
                        <select id="instrucao" class="form-control" name="instrucao">
                            <option value="0" selected>Selecione</option>
                            <option value="1">Primeiro Grau Incompleto</option>
                            <option value="2">Primeiro Grau Completo</option>
                            <option value="3">Segundo Grau Incompleto</option>
                            <option value="4">Superior Incompleto</option>
                            <option value="5">Superior Completo</option>
                            <option value="6">Pós-Grauação Incompleto</option>
                            <option value="7">Pós-Graduação Completo</option>
                            <option value="8">Mestrado Incompleto</option>
                            <option value="9">Mestrado Completo</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="telefonecom">Telefone Comercial</label>
                        <input type="text" class="form-control" id="telefonecom" name="telefonecom">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua...">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Número...">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Casa Fundos...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="religiao">Religião</label>
                        <select id="religiao" class="form-control" name="religiao">
                            <option selected value="1">Católica</option>
                            <option value="2">Budista</option>
                            <option value="3">Espiríta</option>
                            <option value="4">Evangélica</option>
                            <option value="5">Testemunho de Jeová</option>                    
                        </select>
                    </div> 
                    <div class="form-group col-md-4">
                        <label for="respfinan">Responsável Financeiro</label>
                        <select id="respfinan" class="form-control" name="respfinan">
                            <option selected value="1">Sim</option>
                            <option value="2">Não</option>
                        </select>
                    </div>
                </div>     
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pais">País</label>
                        <input type="text" class="form-control" id="pais" name="pais" placeholder="Brasil">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <select id="estado" class="form-control" name="estado">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="municipio">Município</label>
                        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Cidade onde mora...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="celularoutro">Outro Telefone</label>
                        <input type="text" class="form-control" id="celularoutro" name="celularoutro">
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
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<!--        <script type="text/javascript" src="js/script.js"></script>-->
        <script type="text/javascript">
                            var $m = jQuery.noConflict()
                            $m(document).ready(function () {
                                $m("#cep").mask("99999-999");
                                $m("#celular").mask("(99) 99999-9999");
                                $m("#celularoutro").mask("(99) 9999-9999");
                                //$m("#cpf").mask("999.999.999-99");
                                $m("#telefonecom").mask("(99) 9999-9999");
                            });
        </script>
        <script type="text/javascript">
            function optionCheck() {
                var option = document.getElementById("tipo_pessoa").value;
                if (option == "1") {
                    document.getElementById("idDocumentos").style.display = "none";
                    document.getElementById("idDocumentosOutros").style.display = "none";
                } else {
                    document.getElementById("idDocumentos").style.display = "block";
                    document.getElementById("idDocumentosOutros").style.display = "block";
                }
            }
        </script>
        <script type="text/javascript">
            function VerificaCPF() {
                if (vercpf(document.frmcpf.cpf.value))
                {
                    alert('CPF VÁLIDO');
                } else
                {
                    errors = "1";
                    if (errors)
                        alert('CPF NÃO VÁLIDO');
                    document.retorno = (errors == '');
                }
            }
            function vercpf(cpf)
            {
                if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999")
                    return false;
                add = 0;
                for (i = 0; i < 9; i ++)
                    add += parseInt(cpf.charAt(i)) * (10 - i);
                rev = 11 - (add % 11);
                if (rev == 10 || rev == 11)
                    rev = 0;
                if (rev != parseInt(cpf.charAt(9)))
                    return false;
                add = 0;
                for (i = 0; i < 10; i ++)
                    add += parseInt(cpf.charAt(i)) * (11 - i);
                rev = 11 - (add % 11);
                if (rev == 10 || rev == 11)
                    rev = 0;
                if (rev != parseInt(cpf.charAt(10)))
                    return false;
                return true;
            }
        </script>
        <script type="text/javascript">
        // INICIO FUNÇÃO DE MASCARA MAIUSCULA
            function maiuscula(z) {
                v = z.value.toUpperCase();
                z.value = v;
            }
        //FIM DA FUNÇÃO MASCARA MAIUSCULA
        </script>
    </body>
</html>