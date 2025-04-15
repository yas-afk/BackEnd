

<a href="i">Home</a>
<a href="index.php?menu=adicionareceitas">
<button type="button"> ADicionar Receitas</button></a>
<form action="" method="post">
    <input type="text" name="pesquisa" id="pesquisa">
    <button type="submit">PESQUISAR</button>
</form>


<table class="">
    |<tr>
        <th>Titulo</th>
        <th>Descricao</th>
        <th>ReceitaTexto</th>
        <th>Autor</th>
        <th>TipoReceita</th>
    </tr>

<?php

if(isset($_POST['pesquisa'])){
    $termoPesquisado = $_POST['pesquisa'];
}else{
    $termoPesquisado = "";
}

    $sql = "SELECT idReceitas,
    upper(titulo) AS titulo,
    upper(descricao) AS descricao,
    upper(receitatexto) AS receitatexto,
    upper(autor) AS autor,
    upper(tiporeceita) AS tiporeceita
    FROM receitas_culinarias WHERE idReceitas = '$termoPesquisado' OR 
    titulo LIKE '%$termoPesquisado%'
    ORDER BY titulo
    
    ";
    // pedido
    $query = mysqli_query($conexao,$sql) or die ("Erro na requisição!".mysqli_error($conexao));

    // fecth_asso = vai acessar um query, e contar os resultados

    while($dados = mysqli_fetch_assoc($query)){
     ?>
     <tr>
        <td><?=$dados['titulo']?></td>
        <td><?=$dados['descricao']?></td>
        <td><?=$dados['receitatexto']?></td>
        <td><?=$dados['autor']?></td>
        <td><?=$dados['tiporeceita']?></td>
        <td><a href="index.php?menu=editarReceitas&idReceitas=<?$dados['idReceita']?>" class="btn btn-primary">EDITAR</a></td>
        <td><a href="index.php?menu=deletarReceitas&idReceitas=<?$dados['idReceita']?>" class="btn btn-primary">DELETAR</a></td>
     </tr>
<?php
    }
?>

</table>