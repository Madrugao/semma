<?php
//Conexão
require_once 'db_connect.php';

//Sessão
session_start();

//Botão enviar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "<li> O campo senha/login precisa ser preenchido </li>";

    else:

        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        
        $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect); //fechando a conexão
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            else:
                $erros[] = "<li> Usuário e senha não conferem</li>";
            endif;
        else:
            $erros[] = "<li> Usuário inexistente </li>";
        endif;
        
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/signin.css">
        <link rel="icon" href="imagem/semmaicon.png">


        <title>Santarém Ambiental</title>
    </head>
    <body class="text-center">  
        
        <?php
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
        ?>

        <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <img class="mb-4" src="imagem/logo_semma.png" alt="SEMMA" width="128" height="128">
            <h1 class="h3 mb-3 font-weight-normal">Acesso Restrito</h1>

            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="login" class="form-control" placeholder="Digite o usuário">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Digite a Senha">
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-entrar">Entrar</button>
            <p class="text-center">&copy; Esqueceu a senha?</p>
        </form>

    </body>

</html>