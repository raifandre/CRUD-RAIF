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
        <body>
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
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Nome</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td class="text-center"><a href="visualizar.php">André</a></td>
                                <td class="text-center">exemplo@email.com</td>
                                <td class="text-center"><a href="alterar.php"><button class="btn btn-primary">Alterar</button></a> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</button></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">2</th>
                                <td class="text-center"><a href="visualizar.php">Júlio</a></td>
                                <td class="text-center">exemplo@email.com</td>
                                <td class="text-center"><a href="alterar.php"><button class="btn btn-primary">Alterar</button></a> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</button></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">3</th>
                                <td class="text-center"><a href="visualizar.php">Ana Heloísa</a></td>
                                <td class="text-center">exemplo@email.com</td>
                                <td class="form-group text-center"><a href="alterar.php"><button type="button" class="btn btn-primary">Alterar</button></a> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- RODAPE -->
            <div class="text-center">
                <br><b><p><i>2018 - Todos direitos reservados</i></p></b>
            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Excluir</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>Deseja realmente excluir esses dados ?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="">Não</button>
                    <button type="button" class="btn btn-success" data-dismiss="">Sim</button>
                  </div>
                </div>

              </div>
            </div>
        </body>
    </head>
</html>