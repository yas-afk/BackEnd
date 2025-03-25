<h1>Adicionar um Novo Carro</h1>

<form action="index.php?menu=adicionarCarros" method="post">
    <div class="form-group">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo">
    </div>
    <div class="form-group">
        <label for="modelo">Marca:</label>
        <input type="text" id="marca" name="marca">
    </div>
    <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor">
    </div>
    <div class="form-group">
        <label for="ano">Ano:</label>
        <input type="date" id="ano" name="ano">
    </div>
    <div class="form-group">
        <label for="cor">Cor:</label>
        <input type="color" id="cor" name="cor">
    </div>
    <button type="submit">Adicionar</button>
</form>