<?php
//Conexão
require_once 'db_connect.php';

//Sessão
session_start();

//Verificação
if(!isset($_SESSION['logado'])):
    header('Location: login.php');
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="icon" href="imagem/semmaicon.png">
        <script defer src="js/all.min.js"></script>


        <title>Santarém Ambiental</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-success">        
            <a class="sidebar-toggle text-ligth mr-3"><i class="fas fa-list-ul fa-2x text-white"></i></a>
            <a class="navbar-brand" href="#">Santarém Ambiental</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Sair <span class="sr-only">(current)</span></a>
                    </li> -->
                </ul>
                
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar denúncia" aria-label="Buscar">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav> 


        <div class="d-flex">
            <nav class="sidebar">
                <ul class="list-unstyled">
                    <li><a href="home.php"><i class="fas fa-exclamation-triangle"></i> Denúncias</a></li>
                    <li><a href="categorias.php"><i class="fas fa-clipboard-list"></i> Categorias</a></li>
                    <li><a href="cadastrados.php"><i class="fas fa-users"></i> Usuários</a></li>
                    <li><a href="index.php"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                </ul>
            </nav>

            <div class="content p-1">
                <div class="list-group-item">
                    <div class="d-flex">
                        <div class="mr-auto p-2">
                            <h2 class="display-4 titulo">Denúncias</h2>
                        </div>
                    </div>                
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center d-none d-lg-table-cell text-center">PROTOCOLO</th>
                                    <th class="text-center">DENUNCIA</th>
                                    <th class="d-none d-lg-table-cell text-center">HORA</th>
                                    <th class="d-none d-lg-table-cell text-center">DATA</th>
                                    <th class="text-center">STATUS</th>
                                    <th class="text-center">CHAMADO</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center d-none d-lg-table-cell text-center">1</th>
                                    <td class="text-center">POL. SONORA</td>
                                    <td class="d-none d-lg-table-cell text-center">30/08/2019</td>
                                    <td class="d-none d-lg-table-cell text-center">20:15</td>
                                    <td class="text-center text-success letra_col">Atendido</td>
                                    <th class="text-center">
                                        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#verDenuncia">Visualizar</button>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-center d-none d-lg-table-cell text-center">2</th>
                                    <td class="text-center">DESMATAMENTO</td>
                                    <td class="d-none d-lg-table-cell text-center">30/08/2019</td>
                                    <td class="d-none d-lg-table-cell text-center">20:15</td>
                                    <td class="text-center text-danger letra_col">Pendente</td>
                                    <th class="text-center">
                                        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#verDenuncia">Visualizar</button>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Mensagem-->
        <div class="modal fade" id="verDenuncia" tabindex="-1" role="dialog" aria-labelledby="verDenunciaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="exampleModalLabel" >Mensagem</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div  class="modal-body">
                            <form>
                                <fieldset disabled>
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do amigo do meio ambiente">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email do amigo do meio ambiente">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Mensagem</label>
                                        <textarea name="denuncia" class="form-control" id="denuncia" rows="5"></textarea>
                                    </div>
                                </fieldset>                        
                            </form>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#responderDenuncia">Responder</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Resposta-->
        <div class="modal fade" id="responderDenuncia" tabindex="-1" role="dialog" aria-labelledby="responderDenuncia" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Responder</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div  class="modal-body">
                            <form>
                                <div class="form-group">
                                   <div class="btn-group">
                                        <select name="agente" id="agente" class="form-control">
                                            <option selected>Agente responsável</option>
                                            <option>José Ribeiro</option>
                                            <option>Fernando Silva</option>
                                            <option>Júlio César</option>
                                        </select>
                                    </div>
                                </div>                               
                                <fieldset disabled>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="santarem@ambiental.com">
                                    </div>
                                </fieldset> 
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Resposta</label>
                                    <textarea name="resposta" class="form-control" id="resposta" rows="5"></textarea>
                                </div>                       
                            </form>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning">Imprimir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.3.1.slim.min.js"></script> 
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/dashboard.js"></script>
        
    </body>
</html>