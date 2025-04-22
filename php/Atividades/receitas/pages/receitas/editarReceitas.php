<h1>EDITAR RECEITA</h1>
<?php 
    $idReceitas = $_GET['idReceitas'];

    echo "Essa é a receita de n°$idReceitas";

    $sql = "SELECT * FROM receitas_culinarias WHERE idReceitas = {$idReceitas}";

    $query = mysqli_query($conexao, $sql) or die ("Erro ao executar a consulta".mysqli_error($conexao));

    $dados = mysqli_fetch_assoc($query);
?>

<h1>Editar uma receita</h1>

<form action="index.php?menu=EditarReceita" method="post">
    <div class="form-group">
        <label for="id">N°:</label>
        <input value="<?= $dados['idReceitas']?>" type="text" id="id" name="id">
    </div>
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input value="<?= $dados['titulo']?>" type="text" id="titulo" name="titulo">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input value="<?= $dados['descricao']?>" type="text" id="descricao" name="descricao">
    </div>
    <div class="form-group">
        <label for="receitaTexto">Texto da Receita:</label>
        <input value="<?= $dados['receitatexto']?>" type="text" id="receitaTexto" name="receitaTexto">
    </div>
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input value="<?= $dados['autor']?>" type="text" id="autor" name="autor">
    </div>
    <div class="form-group">
        <label for="tipoReceita">Tipo da Receita:</label>
        <input value="<?= $dados['tiporeceita']?>" type="text" id="tipoReceita" name="tipoReceita">
    </div>

    <button type="submit">Editar</button>
</form>