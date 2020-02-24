<?php
include "Conexao.php";

$sql = "select*from cliente";

$resultado= mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/MeuEstilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <h1>Lista de Usuários</h1>
        <div class="table-responsive-sm">
        <table border="1" class="table table-dark table-hover">           
            <TR>
                <td>Nome</td>
                <td>Sobre Nome</td>
                <td>Sexo</td>
                <td>Email</td>
                <td>Data de Nascimento</td>
                <td>Usuário</td>
                <td>Senha</td>
                <td>Atualizar</td>
                <td>Excluir</td>
            </TR> 
            
           <?php
           while($cliente = mysqli_fetch_assoc($resultado)){
               echo "<TR>";
               
               echo "<td>".$cliente ['nome']."</td>";
               echo "<td>".$cliente ['sobreNome']."</td>";
               echo "<td>".$cliente ['sexo']."</td>";
               echo "<td>".$cliente ['email']."</td>";
               echo "<td>".$cliente ['dataNascimento']."</td>";
               echo "<td>".$cliente ['usuario']."</td>";
               echo "<td>".$cliente ['senha']."</td>";
               echo "<td><a href= 'formAtualizarBD.php?id_cliente=$cliente[id]'>atualizar</a></td>";
               echo "<td><a href='ExcluirPessoa.php?id_cliente=$cliente[id]'>excluir</a></td>";
           }
           
           mysqli_close($conexao)
           ?>
            
        </table>
           </div>
        <p>Cadastrar<a href="Cadastro.php"> Novo(a)</a>pessoa</p>
    </body>
</html>
