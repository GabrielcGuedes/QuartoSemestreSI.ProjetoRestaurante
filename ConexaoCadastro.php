<?php

include "Conexao.php";

$nome=$_POST["nometxt"];
$sobrenome=$_POST["sobrenometxt"];
$sexo=$_POST["sexo"];
$email=$_POST["emailtxt"];
$date=$_POST["datetxt"];
$usuario=$_POST["usuariotxt"];
$senha=$_POST["senhatxt"];

$sql = "insert into cliente (nome,sobreNome,sexo,email,dataNascimento,usuario,senha) values('$nome','$sobrenome','$sexo','$email','$date','$usuario','$senha')";

if(mysqli_query($conexao,$sql))
        {
    echo 'Pessoa cadastrada com sucesso';
    header("Location:Login.php");
        } else {
            echo "Error:". $sql."<br>".mysqli_error($conn);
}
mysqli_close($conexao);
