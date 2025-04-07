<h1>VOCÊ ESTÁ NA LISTA DE CARROS</h1>


<a href="i">Home</a>
<a href="index.php?menu=adicionarCarros">
<button type="button"> ADicionar Carro</button></a>

<table>
    |<tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cor</th>
    </tr>
<?php
    $sql = "SELECT * from carros";
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
     </tr>
<?php
    }
?>

</table>
