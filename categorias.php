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
            
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sair <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div> -->
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
                        <h2 class="display-4 titulo">Estatisticas</h2>
                    </div>
                </div>

                <div class="row mb-3 mouse">
                    <div class="col-lg-3 col-sm-5">
                        <div class="card bg-success text-white">
                            <i class="fas fa-tree fa-5x"></i>
                            <div class="card-body">
                                <h6 class="card-title">Desmatamento</h6>
                                <h2 class="lead">50</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5">
                        <div class="card bg-primary text-white">
                            <i class="fas fa-fire-alt fa-5x"></i>
                            <div class="card-body">
                                <h6 class="card-title">Queimada</h6>
                                <h2 class="lead">150</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5">
                        <div class="card bg-secondary text-white">
                            <i class="fas fa-volume-mute fa-5x"></i>
                            <div class="card-body">
                                <h6 class="card-title">Poluição Sonora</h6>
                                <h2 class="lead">50</h2>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5">
                        <div class="card bg-danger text-white">
                            <i class="fas fa-smog fa-5x"></i>
                            <div class="card-body">
                                <h6 class="card-title">Poluição Atmosférica</h6>
                                <h2 class="lead">50</h2>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3 col-sm-5  mouse">
                        <div class="card bg-warning text-white">
                            <i class="fas fa-water fa-5x"></i>
                            <div class="card-body">
                                <h6 class="card-title">Poluição Hídrica</h6>
                                <h2 class="lead">50</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5  mouse">
                        <div class="card bg-info text-white">
                            <i class="fas fa-globe-europe fa-5x"></i>
                            <div class="card-body">
                                <h6 class="card-title">Poluição do Solo</h6>
                                <h2 class="lead">50</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5  mouse">
                        <div class="card bg-light text-dark">
                            <i class="fas fa-cat fa-5x"></i>
                            <div class="card-body">
                                <h6 class="card-title">Maus-tratos de Animais</h6>
                                <h2 class="lead">50</h2>
                            </div>
                        </div>
                    </div>
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