<?php

    session_start();

    // verifica se algo está null
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = []; 
    }

    if(isset($_GET['produto'])){
        // NOMEVARIAVEL[INDICEVAZIO] = PRODUTO -> PODE SER ADICIONADO
        // SUBSTITUIDO
        $_SESSION['carrinho'][]= $_GET ['produto']; 
    }

    if(isset($_GET['deletarCarrinho'])){
       // session_destroy();
        $_SESSION['carrinho'] = [];
    }

    // var_dump($_SESSION['carrinho']);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojinha</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="shortcut icon" href="../images/logo/logo.svg" type="image/x-icon">
</head>
<body>
   <a href="?produto=SSD">Adicionar SSD</a> 
   <a href="?produto=Disco de memoria">Adicionar Disco de memoria</a> 
   <a href="?produto=Memória RAM">Adicionar Memória RAM</a>
   <a href="?produto=Placa Mãe">Adicionar Placa Mãe</a>
   <!-- deletar -->
   <a href="?deletarCarrinho=True">Deletar Carrinho</a>
   
   
   <ul>
         <?php
             // foreach(array as alias){}
            // foreach(filmes as filmes){ filme.nome , filme.desc }
           foreach($_SESSION['carrinho'] as $produto){
               echo "<li> $produto </li>";
       }
        ?>
   </ul>
</body>
</html>