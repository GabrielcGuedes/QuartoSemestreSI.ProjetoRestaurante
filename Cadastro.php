<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/MeuEstilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/meuEstiloCadastro.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body id="cadastroBg">
       
        <div class="container-fluid" id="cadastroContainer">
            <form class="form-group" action="ConexaoCadastro.php" method="post">
                <h1>Cadastro</h1>
                <fieldset>
                    <label>Nome:</label><input type="text" placeholder="Digite seu nome" class="form-control" name="nometxt"><br>
                    <label>Sobre Nome:</label><input type="text" placeholder="Digite seu sobre nome" class="form-control" name="sobrenometxt"><br>
                    <label>Usuário:</label><input type="text" placeholder="Digite um usuário" class="form-control" name="usuariotxt"><br>
                    <label>Senha:</label><input type="password" placeholder="Digite sua senha" class="form-control" name="senhatxt"><br>
                    <label>E-mail:</label><input type="email" placeholder="Digite seu E-mail" class="form-control" name="emailtxt"><br>
                    <label>Data de nascimento:</label><input type="date" class="form-control" name="datetxt"><br>
                    <div class="custom-control custom-radio custom-control-inline" id="divcadastroSexo">
                        <label id="cadastroSexo">Sexo:</label><br>
                        <input type="radio"  id="customRadio" name="sexo" value="Masculino" class="custom-control-input" > 
                        <label class="custom-control-label" for="customRadio">Masculino</label>                  
                    </div>
                    <div class="custom-control custom-radio custom-control-inline"  > 
                        <input type="radio"  id="customRadio2" name="sexo" value="Feminino" class="custom-control-input" > 
                        <label class="custom-control-label" for="customRadio2">Feminino</label>                  
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary" class="form-control">Cadastrar</button>
                    <a href='index.php' id="cadastroPagPrin">Pagina principal</a>
                </fieldset>
            </form>
        </div>     
    </body>
</html>

