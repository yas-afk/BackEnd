<?php

$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$descricao = mysqli_real_escape_string($conexao,$_POST['descricao']);
$avaliacao = mysqli_real_escape_string($conexao,$_POST['avaliacao']);

$sql = "INSERT INTO livros(
nomeLivro
descricaoLivro
avaliacaoLivro,
)VALUES(
 '{$nome}',
 '{$descricao}',
 '{$avaliacao}'
)"
?>