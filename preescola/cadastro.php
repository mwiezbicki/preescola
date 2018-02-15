<html>
    <head>
        <title>Cadastro de Pessoas</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    </head>
    <body>
        <div id="main" class="container-fluid">
            <h3>Adicionar Pessoa</h3>
            <form border="1" solid="1" width="100%">
                <hr />
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="dt_cadastro">Data/Hora Cadastro</label>
                        <input type="text" class="form-control" id="dt_cadastro" value="<?php echo date('d/m/Y H:i'); ?>">
                    </div>
                </div>    
                <div class="form-group col-md-4">
                    <label for="dt_nascimento">Data Nascimento</label>
                    <input type="date" class="form-control" id="dt_nascimento">
                </div>
                <div class="form-group col-md-4">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" class="form-control">
                        <option selected value="1">Masculino</option>
                        <option value="2">Feminino</option>
                    </select>
                </div>  
                <div class="form-group col-md-4">
                    <label for="tipo_pessoa">Pessoa</label>
                    <select id="tipo_pessoa" onchange="optionCheck()" class="form-control">
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
                        <select id="nomealuno"class="form-control">
                            <option>Selecione</option>
                            <option>Marlon Wiezbicki</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" id="rg" placeholder="Digite seu RG">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="profissao">Profissão</label>
                        <select id="profissao" class="form-control">
                            <option selected value="1">Administrador</option>
                            <option value="2">Comerciante</option>
                            <option value="3">Médico</option>
                            <option value="4">Enfermeiro</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" placeholder="Digite seu E-mail">
                    </div>
                </div>

                <div class="form-row" id="idDocumentosOutros" style="display: none">
                    <div class="form-group col-md-3">
                        <label for="empresa">Empresa</label>
                        <input type="text" class="form-control" id="empresa" placeholder="Digite empresa aonde trabalha">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="enderecocom">Endereço Comercial</label>
                        <input type="text" class="form-control" id="enderecocom" placeholder="Digite o endereço comercial">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="instrucao">Grau de Instrução</label>
                        <select id="instrucao" class="form-control">
                            <option>Selecione</option>
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
                        <input type="text" class="form-control" id="telefonecom">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Rua...">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" placeholder="Número...">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" placeholder="Casa Fundos...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="religiao">Religião</label>
                        <select id="religiao" class="form-control">
                            <option selected value="1">Católica</option>
                            <option value="2">Budista</option>
                            <option value="3">Espiríta</option>
                            <option value="4">Evangélica</option>
                            <option value="5">Testemunho de Jeová</option>                    
                        </select>
                    </div> 
                    <div class="form-group col-md-4">
                        <label for="respfinan">Responsável Financeiro</label>
                        <select id="respfinan" class="form-control">
                            <option selected value="1">Sim</option>
                            <option value="2">Não</option>
                        </select>
                    </div>
                </div>     
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="pais">País</label>
                        <input type="text" class="form-control" id="pais" placeholder="Brasil">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <select id="estado" class="form-control">
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
                        <input type="text" class="form-control" id="municipio" placeholder="Cidade onde mora...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="celularoutro">Outro Telefone</label>
                        <input type="text" class="form-control" id="celularoutro">
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
                        <a href="cadastro.php" class="btn btn-danger">Cancelar</a>
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
                            $m("#cpf").mask("999.999.999-99");
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
    </body>
</html>