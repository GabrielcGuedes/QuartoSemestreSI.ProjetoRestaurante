<?php
include "Conexao.php";

$cliente= $_GET["id_cliente"];

$consulta_por_id = "DELETE FROM cliente where id=$cliente";

$resultado = mysqli_query($conexao, $consulta_por_id);

$linhas= mysqli_affected_rows($conexao);

if($linhas == 1){
    header("Location: BancoDeDados.php");
}
else{
    echo "Opereção não realizada";
}

mysqli_close($conexao);