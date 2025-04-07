<h1>Adicionar um Novo Livro</h1>

<form action="index.php?menu=adicionarLivros" method="post">

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="descricao">Descricao:</label>
        <input type="text" id="descricao" name="descricao">
    </div>
    <div class="form-group">
        <label for="avaliacao">Avaliacao:</label>
        <input type="number" id="avaliacao" name="avaliacao">
    </div>
     <div class="form-group">
        <label for="imagem">Imagem:</label>
        <input type="text" id="imagem" name="imagem">
    </div>
    <button type="submit">Adicionar</button>
</form>
