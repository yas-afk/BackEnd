<?php
    include('db/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>projetolivros</title>
     <link rel="stylesheet" href="styles/index.css">
 
</head>
<body>
    <header>
          <nav>
          <header>
    <div id="logo">
        <img src="images/book.svg">
        <h2>Livros</h2>
    </div>
    <nav>
    </nav>
           
          </nav>
    </header>
    <body>
         <main>
         <a href="index.php?menu=lista">Lista</a>
             <h3>Livros Raphael Montes</h3>
             <div id="conteudo">
    <img src="images/livro1.png" alt="">
    <img src="images/livro2.png" alt="">
    <img src="images/livro3.png" alt="">
  </div>
    <main>
        <?php
        if(isset($_GET['menu'])){
            $pagina = $_GET['menu'];
        }else{
          
        }
    
        switch($pagina){
            case 'lista';
                include("pages/listasLivros/listaLivros.php");
                break;
            default:
                break;
            case 'adicionarLivros':
                include("pages/listasLivros/adicionarLivros.php");
                break;
            case 'dbadicionarLivros':
                include("pages/listasLivros/dbadicionarLivros.php");
                break;
        }
        ?>
    </main>
    <script src="scripts/script.js"></script>
</body>
</html>