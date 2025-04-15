<?php
$titulo = mysqli_real_escape_string($conexao,$_POST['titulo']);
$descricao = mysqli_real_escape_string($conexao,$_POST['descricao']);
$receitatexto = mysqli_real_escape_string($conexao,$_POST['receitatexto']);
$autor = mysqli_real_escape_string($conexao,$_POST['autor']);
$tiporeceita = mysqli_real_escape_string($conexao,$_POST['tiporeceita']);

$sql = "INSERT INTO receitas_culinarias (
        titulo,
        descricao,
        receitatexto,
        autor,
        tiporeceita
    )VALUES (
        '{$titulo}',
        '{$descricao}',
        '{$receitatexto}',
        '{$autor}',
        '{$tiporeceita}'
        
    )";

mysqli_query($conexao,$sql) or die ("Erro as atualizar");

echo "A receita foi atualizada!";
?>