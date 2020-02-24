<?php
include "Conexao.php";
session_start();

$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];

if(empty($login)){
    $_SESSION['mensagem']="Preencha o campo Login";
    header("location: Login.php");
}else if(empty ($senha)){
    $_SESSION['mensagem']="Preencha o campo Senha";
    header("location: Login.php");
}else{
    $sql = "select * from cliente where usuario='$login' and senha='$senha'";
    $resultado = mysqli_query($conexao, $sql); 
    $dados = mysqli_fetch_assoc($resultado);
    
    if($dados['usuario'] == $login and $dados['senha'] == $senha){
        $usuario = array("usuario" =>$dados['usuario'], "senha"=>$dados['senha']);
        $_SESSION['usuario']=$usuario;
        header("location:BancoDeDados.php");
        
    } else {
        $_SESSION['mensagem']="Login ou senha Invalido";
        header("location:Login.php");
    }
    
}
mysqli_close($conexao);
