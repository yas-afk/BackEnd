<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <main>

        <form action="pages/menu.php" method="get">
            <!-- NOME USUARIO -->
            <div class="form-input">
                <label for="">Nome</label>
                <input placeholder="Insira seu nome completo " name="nome" id="nome" type="text">
            </div>

            <!-- EMAIL USUARIO -->
            <div class="form-input">
                <label for="email">Email</label>
                <input placeholder="Insira seu email " name="email" id="email" type="email">
            </div>

            <!-- SENHA USUARIO -->
              <div class="form-input">
                <label for="senha">Senha</label>
                <input placeholder="Insira sua senha" name="senha" id="senha" type="password">
            </div>
        <button type="submit">ENVIAR</button>
        </form>
    </main>
</body>
</html>