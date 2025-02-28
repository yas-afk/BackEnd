<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <?php    
            echo "<h1></h1><br>";
        ?>
    </header>

    <main>
        <?php 
            $autor = "Antoine de Saint-Exupéry";
            $titulo = "Pequeno Príncipe";
            $descricao = "Um piloto cai com seu avião no deserto e ali encontra uma criança loura e frágil. Ela diz ter vindo de um pequeno planeta distante. E ali, na convivência com o piloto perdido, os dois repensam os seus valores e encontram o sentido da vida.";
            echo "<h2>Catálogo</h2><br>";
            echo "<h3>$titulo</h3><br>";
            echo "<p>$descricao</p><br>";
            echo "<p>Autor: $autor</p>";
        ?>
    </main>
</body>
</html>