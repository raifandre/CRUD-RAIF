<?php
    include_once("../controllers/Pessoa_Controller.php");
    $pessoa = new Pessoa_Controller;
    $listar = $pessoa->listar();
    $quant = count($listar);
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
                    <input type="hidden" name="idPessoa" id="idPessoa" value=" <? echo $id; ?>">
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
                            <?php for ($i=0; $i < $quant; $i++) { ?>
                                <tr>
                                    <th scope="row" class="text-center"><?php echo $listar[$i]->id?></th>
                                    <td class="text-center"><a href="visualizar.php?id=<?php echo $listar[$i]->id?>"><?php echo $listar[$i]->nome?></a></td>
                                    <td class="text-center"><?php echo $listar[$i]->email?></td>
                                    <td class="text-center"><a href="alterar.php?id=<?php echo $listar[$i]->id?>"><button class="btn btn-primary">Alterar</button></a> <button type="button" class="btn btn-danger" onclick="incrementId(<?php echo $listar[$i]->id?>);" data-toggle="modal" data-target="#deleteModal">Excluir</button></td>
                                </tr>
                            <?php } ?>
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
            <script src="../../public/js/jquery.js"></script>
            <script src="../../public/js/jquery.mask.js"></script>

            <!-- Modal -->
            <div id="deleteModal" class="modal fade" role="dialog">
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
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                            <a id="deletar"><button type="submit" class="btn btn-success" id="deleteSim" data-dismiss="">Sim</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                
                function incrementId(id) {
                    $("#deleteSim").attr('onclick', 'deletar('+id+');');
                    $("#deletar").attr('href', '../actions/deletar.php?id='+id);

                }

            </script>
        </body>
    </head>
</html>