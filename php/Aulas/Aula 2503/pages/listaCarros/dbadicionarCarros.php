<?php

// defende de comandos para o db
$modelo = mysqli_real_escape_string($conexao,$_POST['modelo']);
$marca = mysqli_real_escape_string($conexao,$_POST['marca']);
$valor = mysqli_real_escape_string($conexao,$_POST['valor']);
$ano = mysqli_real_escape_string($conexao,$_POST['ano']);
$cor = mysqli_real_escape_string($conexao,$_POST['cor']);

$sql = "INSERT INTO carros(
modeloCarro
marcaCarro
valorCarro
anoCarro
corCarro,
)VALUES(
 '{$modelo}',
 '{$marca}',
 '{$valor}',
 '{$ano}',
 '{$cor}'
)"
?>