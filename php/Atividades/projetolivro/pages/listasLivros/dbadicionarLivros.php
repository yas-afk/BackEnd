<?php

$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$descricao = mysqli_real_escape_string($conexao,$_POST['descricao']);
$avaliacao = mysqli_real_escape_string($conexao,$_POST['avaliacao']);
$imagem = mysqli_real_escape_string($conexao,$_POST['imagem']);

$sql = "INSERT INTO livros(
nomeLivro
descricaoLivro
avaliacaoLivro
imagemLivro,
)VALUES(
 '{$nome}',
 '{$descricao}',
 '{$avaliacao}',
 '{$imagem}'
)"
?>
