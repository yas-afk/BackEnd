<?php 
    include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Receitas Culinarias</title>
     <link rel="stylesheet" href="styles/index.css">
     
</head>
<body>
    <header>
          <nav>
              <a href="index.php?menu=home">Home</a>
              <a href="index.php?menu=receitas">receitas</a>
          </nav>
    </header>
    <body>
       
   
  </div>
    <main>
        <?php
        if(isset($_GET['menu'])){
            $pagina = $_GET['menu'];
        }else{
          $pagina = "home";
        }
    
        switch($pagina){
            case 'home' :
                include("pages/home/home.php");
                break;
            case 'receitas':
                include("pages/receitas/listareceitas.php");
                break;
            case 'adicionareceitas':
                include("pages/receitas/adicionareceitas.php");
                break;
            case 'dbAdicionareceitas':
                include("pages/receitas/dbadicionareceitas.php");
                break;
            default:
                include("pages/home/home.php");
                break;
        }
        ?>
    </main>
    <script src="scripts/script.js"></script>
</body>
</html>