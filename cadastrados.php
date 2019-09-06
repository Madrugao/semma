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
        <!-- <link rel="stylesheet" href="css/style.css"> -->
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
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar usuário" aria-label="Buscar">
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
                            <h2 class="display-4 titulo">Cadastrados</h2>
                        </div>
                        <div class="p-2">
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#cadastrarUsuario">Cadastrar</button>
                        </div>
                    </div>  
                    <div class="alert alert-success" role="alert">
                        Usuário excluído com sucesso!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                          
                    </div>              
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center d-none d-lg-table-cell text-center">ID</th>
                                    <th class="text-center">Nome</th>
                                    <th class="d-none d-lg-table-cell text-center">Email</th>
                                    <th class="d-none d-lg-table-cell text-center">Usuario</th>
                                    <th class="d-none d-lg-table-cell text-center">Senha</th>
                                    <th class="text-center">Opções</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center d-none d-lg-table-cell text-center">1</th>
                                    <td class="text-center">Josivaldo</td>
                                    <td class="d-none d-lg-table-cell text-center">Josivaldo@brasil</td>
                                    <td class="d-none d-lg-table-cell text-center">Joss</td>
                                    <td class="d-none d-lg-table-cell text-center">12345678</td>
                                    <th class="text-center">
                                        <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#editarUsuario">Editar</button>
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#apagarRegistro">Apagar</button>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Exclusao-->
        <div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistroLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="exampleModalLabel">EXCLUIR USUÁRIO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir o usuário selecionado?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger">Apagar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edição-->
        <div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="editarUsuario" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="exampleModalLabel" >Editar Usuário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div  class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nome</label>
                                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Insira seu Email">
                                </div>                           
                                <div class="form-group col-md-4">
                                    <label>Usuário</label>
                                    <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Nome de usuário">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Senha</label>
                                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite uma senha">
                                </div>
                            </div>             
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#responderDenuncia">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Cadastro-->
        <div class="modal fade" id="cadastrarUsuario" tabindex="-1" role="dialog" aria-labelledby="cadastrarUsuario" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="exampleModalLabel" >Cadastrar Usuário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div  class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nome</label>
                                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Insira seu Email">
                                </div>                           
                                <div class="form-group col-md-4">
                                    <label>Usuário</label>
                                    <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Nome de usuário">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Senha</label>
                                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite uma senha">
                                </div>
                            </div>             
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#responderDenuncia">Cadastrar</button>
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