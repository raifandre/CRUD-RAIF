<?php
    include_once("../controllers/Pessoa_Controller.php");
    $id = $_GET['id'];
    $pessoa = new Pessoa_Controller;
    $buscar = $pessoa->buscarId($id);
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../../public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- TOPO -->
        <div class="">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive" id="logo" src="../../public/img/CRUD.png" alt="CRUD RAIF">
                </div>
                <div class="col-md-8">
                    <h1><b><u><p class="destaque">CRUD - RAIF</p></u></b></h1>
                </div>
            </div>
        </div><hr>
        <body style="overflow-x:hidden">
            <!-- MENU -->
            <div class="container bg-verde-musgo">
                <div class="row">
                    <div class="col-12 row">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <ul class="navbar-nav mr-auto">
                                <li><a class="navbar-brand" href="index.php" id=""><button class="btn">Início/Listagem</button></a></li>
                                <li><a class="navbar-brand" href="cadastrar.php"><button class="btn">Cadastrar</button></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div><br>
                
            <!-- CONTEUDO -->
            <div class="container">
                <form id="alterar" enctype="multipart/form-data" method="post" role="alterar" onsubmit="return false;" accept-charset="utf-8">
                    <input type="hidden" id="alterarPessoa" name="alterarPessoa" value="<?= $id?>">
                    <div class="row">
                        <div class="col-md-12 row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b><label>Nome <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" value="<?= $buscar->nome?>" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Sobrenome <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" value="<?= $buscar->sobrenome?>" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Email <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="exemplo@email.com" value="<?= $buscar->email?>" required>
                                </div>
                                <div class="form-group">
                                    <b><label>RG <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="number" id="rg" name="rg" placeholder="RG" value="<?= $buscar->rg?>" required>
                                </div>
                                <div class="form-group">
                                    <b><label>CPF <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="cpf" name="cpf" placeholder="999.999.999-99" value="<?= $buscar->cpf?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b><label>CEP <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="cep" name="cep" placeholder="CEP" value="<?= $buscar->cep?>" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Estado <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="estado" name="estado" placeholder="Estado" value="<?= $buscar->estado?>" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Cidade <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade" value="<?= $buscar->cidade?>" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Rua <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="rua" name="rua" placeholder="Rua" value="<?= $buscar->rua?>" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Número <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="number" id="numero" name="numero" placeholder="Número" value="<?= $buscar->numero?>" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Complemento :</label></b>
                                    <input class="form-control" type="text" id="complemento" name="complemento" placeholder="Complemento" value="<?= $buscar->complemento?>">
                                </div><br>
                            </div>                      
                            <div class="col-md-12">
                                <div class="form-group text-right">
                                    <a href="visualizar.php?id=<?=$buscar->id?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                    <a href="alterar.php"><button type="submit" onclick="alterar();" class="btn btn-success">Salvar</button></a>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </form>
            </div>
            
            <!-- RODAPE -->
            <div class="text-center">
                <br><b><p><i>2018 - Todos direitos reservados</i></p></b>
            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="../../public/js/jquery.js"></script>
            <script src="../../public/js/jquery.mask.js"></script>
        </body>
    </head>
</html>

<script>

    function alterar() {
        
        if($('#nome').val() == '' || $('#sobrenome').val() == '' || $('#email').val() == '' || $('#rg').val() == '' || $('#cpf').val() == '' || $('#cep').val() == '' || $('#estado').val() == '' || $('#cidade').val() == '' || $('#rua').val() == '' || $('#numero').val() == ''){

            alert('Preencha os campos obrigatorios.')
            return false;

        } else {

            var dados = $('#alterar').serialize();
            $.ajax({
                //Envia os valores para action
                url: '../actions/alterar.php',
                type: 'post',
                dataType: 'html',
                data: dados,
                success: function(result){
                    if(result == 'Dados alterado com sucesso.'){
                        alert(result);
                        setTimeout("document.location = './'", 1000);
                    } else {
                        alert("Falha ao alterar dados.");
                    }
                }
            });

        }

    }

</script>
