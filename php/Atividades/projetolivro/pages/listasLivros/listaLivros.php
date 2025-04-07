<h1>Livros</h1>

<a href="index.php?menu=adicionarLivros"><button type="button"> ADicionar Livro</button></a>

<table>
    |<tr>
        <th>Nome</th>
        <th>Descricao</th>
        <th>Avaliacao</th>
        <th>Imagem</th>
  
    </tr>
<?php
    $sql = "SELECT * from livros";

    $query = mysqli_query($conexao,$sql) or die ("Erro na requisição!".mysqli_error($conexao));
   
    while($dados = mysqli_fetch_assoc($query)){
     ?>
     <tr>
        <td><?=$dados['nomeLivro'] ?></td>
        <td><?=$dados['descricaoLivro'] ?></td>
        <td><?=$dados['avaliacaoLivro'] ?></td>
        <td><?=$dados['imagemLivro'] ?></td>
     </tr>
<?php
    }
?>


</table>
