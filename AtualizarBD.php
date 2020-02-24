<?php

include "Conexao.php";

$id_cliente = $_POST["id_cliente"];
$nome=$_POST["nometxt"];
$sobrenome=$_POST["sobrenometxt"];
$sexo=$_POST["sexo"];
$email=$_POST["emailtxt"];
$date=$_POST["datetxt"];
$usuario=$_POST["usuariotxt"];
$senha=$_POST["senhatxt"];

$sql = "update cliente set nome='$nome',sobreNome='$sobrenome',sexo='$sexo',email='$email',dataNascimento='$date',usuario='$usuario',senha='$senha' where id='$id_cliente'";

$resultado = mysqli_query($conexao, $sql); 


if($resultado == true){
    echo"cadastro realizado com sucesso"."<br/>";
    echo "<a href='BancoDeDados.php'>Voltar</a>";
}
else{
    echo "operação nao realizada"."<br/>";
    echo "<a href='BancoDeDados.php'>Voltar</a>";
}

mysqli_close($conexao);