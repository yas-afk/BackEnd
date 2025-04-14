<?php

// defende de comandos para o db
$modelo = mysqli_real_escape_string($conexao,$_POST['modelo']);
$marca = mysqli_real_escape_string($conexao,$_POST['marca']);
$valor = mysqli_real_escape_string($conexao,$_POST['valor']);
$ano = mysqli_real_escape_string($conexao,$_POST['ano']);
$cor = mysqli_real_escape_string($conexao,$_POST['cor']);

$sql = "UPDATE carros SET(
)VALUES(
  modeloCarro ='{$modelo}',
  marcaCarro ='{$marca}',
  valorCarro ='{$valor}',
  anoCarro ='{$ano}',
  corCarro = '{$cor}'
  WHERE idCarro = '{$id}'
)";

mysqli_query($conexao,$sql) or die ("Erro as atualizar");

echo "O carro foi atualizado!";
?>