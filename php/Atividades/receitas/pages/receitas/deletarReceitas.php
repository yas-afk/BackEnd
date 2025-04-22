<h1>DELETAR RECEITA</h1>

<?php 
    $idReceitas = $_GET['idReceitas'];

    $sql = "DELETE FROM receitas_culinarias WHERE idReceitas = $idReceitas";

    $query = mysqli_query($conexao,$sql) or die("Erro ao deletar".mysqli_error($conexao));

    echo "O carro foi deletado com sucesso.";
?>