<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/MeuEstilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/meuEstiloLogin.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="loginBg" > 
        <div class="container-fluid" id="loginContairner">
            <main class="conteudo principal">
                <h1>Login</h1>
                <form class="form-group" action="ValidaUsuario.php" method="post">
                    <fieldset>
                        <label for="login">Usuário:</label><input type="text" id="login" placeholder="Infome seu login"  class="form-control" name="txtLogin"><br>
                        <label>Senha:</label><input type="password" placeholder="Infome sua senha" class="form-control" name="txtSenha"><br>
                        <?php
                        session_start();
                        if(isset($_SESSION['mensagem'])){
                            $msg = $_SESSION ['mensagem'];

                            echo '<p>'.$msg.'</p>';
                            unset($_SESSION['mensagem']);
                        }
                        ?>
                        <button type="submit" class="btn btn-outline-primary">Login</button>
                        <a href='index.php' id="">Pagina principal</a>
                    </fieldset>
                </form>
            </main>
        </div>       
    </body>
</html>
