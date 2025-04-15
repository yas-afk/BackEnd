<h1>Adicionar uma Nova Receita</h1>

<form action="index.php?menu=dbAdicionareceitas" method="post">
    <div class="form-group">
        <label for="modelo">Titulo:</label>
        <input type="text" id="titulo" name="titulo">
    </div>
    <div class="form-group">
        <label for="modelo">Descricao:</label>
        <input type="text" id="descricao" name="descricao">
    </div>
    <div class="form-group">
        <label for="modelo">ReceitaTexto:</label>
        <input type="text" id="receitatexto" name="receitatexto">
    </div>
    <div class="form-group">
        <label for="modelo">Autor:</label>
        <input type="text" id="autor" name="autor">
    </div>
    <div class="form-group">
        <label for="modelo">TipoReceita:</label>
        <input type="text" id="tiporeceita" name="tiporeceita">
    </div>
    <button type="submit">Adicionar</button>
</form>