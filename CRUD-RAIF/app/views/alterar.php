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
                <form>
                    <div class="row">
                        <div class="col-md-12 row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b><label>Nome <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Sobrenome <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Email <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="exemplo@email.com" required>
                                </div>
                                <div class="form-group">
                                    <b><label>RG <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="number" id="rg" name="rg" placeholder="RG" required>
                                </div>
                                <div class="form-group">
                                    <b><label>CPF <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="cpf" name="cpf" placeholder="999.999.999-99" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b><label>CEP <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="cep" name="cpf" placeholder="CEP" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Estado <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="estado" name="estado" placeholder="Estado" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Cidade <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Rua <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="text" id="rua" name="rua" placeholder="Rua" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Número <i id="obrigatorio">*</i>:</label></b>
                                    <input class="form-control" type="number" id="numero" name="numero" placeholder="Número" required>
                                </div>
                                <div class="form-group">
                                    <b><label>Complemento :</label></b>
                                    <input class="form-control" type="text" id="complemento" name="complemento" placeholder="Complemento">
                                </div><br>
                            </div>                 
                            <div class="col-md-6">
                                <div class="form-group text-left">
                                    <b><i>Os campos com <i id="obrigatorio">* </i>são obrigatorios.</i></b>
                                </div>
                            </div>                        
                            <div class="col-md-6">
                                <div class="form-group text-right">
                                    <a href="visualizar.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                    <button type="submit" class="btn btn-success">Salvar</button>
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
        </body>
    </head>
</html>
