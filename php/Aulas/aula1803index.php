<?php

    // incia a sessao
    session_start();
    class Produto{
        public $id;
        public $nome;
        public $valor;
        public $desc;

        public function __construct($id,$nome,$valor,$desc){
            $this->id = $id;
            $this->nome = $nome;
            $this->valor = $valor;
            $this->desc = $desc;
        }
    }
     $nome;


    // verifica se algo está null
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = []; 
    }
    // adicionar produto
    if(isset($_GET['produto'])){
        $produtosDados = new Produto($_GET['id'],$_GET['produto'],$_GET['valor'],$_GET['desc']);
        $_SESSION['carrinho'][]= $produtosDados;
    }

    if(isset($_GET['deletarCarrinho'])){
       // session_destroy();
        $_SESSION['carrinho'] = [];
    }

    if(isset($_GET['removerItem'])){
        foreach($_SESSION['carrinho'] as $id => $produto){
        if($produto->id == $_GET['removerItem']){
             unset($_SESSION['carrinho'][$produto->id]);
             $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
        }
     }
    }

    // var_dump($_SESSION['carrinho']);
    // delete

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
   <a href="?id=1&produto=SSD&valor=199.99&desc='1T de armazenamento'">Adicionar SSD</a> 
   <a href="?id=1&produto=Disco de memoria&valor=49.99&desc='Um disco de memoria'">Adicionar Disco de memoria</a> 
   <a href="?id=1&produto=Memória RAM&valor=100.00&desc='Memória'">Adicionar Memória RAM</a>
   <a href="?id=1&produto=Placa Mãe&valor=150.00&desc='Placa mãe'">Adicionar Placa Mãe</a>
   <!-- deletar -->
   <a href="?deletarCarrinho=True">Deletar Carrinho</a>

   <?php
      $valorTotal =0;
      foreach($_SESSION['carrinho'] as $produto){
        $valorTotal += $produto->valor;
      }

      if($valorTotal ==0){
        echo "O carrinho está vazio";
      }else{
        echo "O valor total R$ $valorTotal";
      }
   ?>
   
   
   <ol>
         <?php
             // foreach(array as alias){}
            // foreach(filmes as filmes){ filme.nome , filme.desc }
           foreach($_SESSION['carrinho'] as $produto){
               echo "<li> 
                       <h1>$produto->nome </h1>
                       <p>$produto->valor </p>
                       <p>$produto->desc </p>
                       <a href='removerItem=$produto->id' > x </a>
                   </li>";
       }
        ?>
   </ol>
</body>
</html>