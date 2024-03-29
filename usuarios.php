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
                
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
                </form> -->
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
                            <h2 class="display-4 titulo">Cadastrar Usuários</h2>
                        </div>
                        <a href="cadastrados.html">
                            <div class="p-2">
                                <button type="button" class="btn btn-outline-success">Cadastrados</button>
                            </div>
                        </a>                      
                    </div><hr>                                          
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nome</label>
                                <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Insira seu Email">
                            </div>
                            <div class="form-group col-md-4">
                                    <!-- <label>Telefone</label>
                                    <input type="number" class="form-control" id="telefone" placeholder="Insira seu número de telefone"> -->
                                </div>
                            <div class="form-group col-md-2">
                                <label>Usuário</label>
                                <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Nome de usuário">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Senha</label>
                                <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite uma senha">
                            </div>
                        </div>             
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.3.1.slim.min.js"></script> 
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/dashboard.js"></script>
        
    </body>
</html>