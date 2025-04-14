<h1>VOCÊ ESTÁ NA LISTA DE CARROS</h1>


<a href="i">Home</a>
<a href="index.php?menu=adicionarCarros">
<button type="button"> ADicionar Carro</button></a>
<form action="" method="post">
    <input type="text" name="pesquisa" id="pesquisa">
    <button type="submit">PESQUISAR</button>
</form>


<table class="">
    |<tr>
        <th>Modelo</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cor</th>
    </tr>

<?php

if(isset($_POST['pesquisa'])){
    $termoPesquisado = $_POST['pesquisa'];
}else{
    $termoPesquisado = "";
}

    $sql = "SELECT idCarros,
    upper(modeloCarro) AS modeloCarro,
    upper(valorCarro) AS valorCarro,
    DATE_FORMAT(anoCarro, '%d / %m / %y)' AS anoCarro,
    upper(corCarro) AS corCarro
    FROM carros WHERE idCarros = '$termoPesquisado' OR 
    modeloCarro LIKE '%$termoPesquisado%'
    ORDER BY modeloCarro
    ";
    // pedido
    $query = mysqli_query($conexao,$sql) or die ("Erro na requisição!".mysqli_error($conexao));

    // fecth_asso = vai acessar um query, e contar os resultados

    while($dados = mysqli_fetch_assoc($query)){
     ?>
     <tr>
        <td><?=$dados['modeloCarro']?></td>
        <td><?=$dados['valorCarro']?></td>
        <td><?=$dados['anoCarro']?></td>
        <td><?=$dados['corCarro']?></td>
        <td><a href="index.php?menu=editarCarros&idCarros=<?$dados['idCarro']?>" class="btn btn-primary">EDITAR</a></td>
        <td><a href="index.php?menu=deletarCarros&idCarros=<?$dados['idCarro']?>" class="btn btn-primary">DELETAR</a></td>
     </tr>
<?php
    }
?>

</table>
