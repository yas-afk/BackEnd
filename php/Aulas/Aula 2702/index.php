<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INTRODUÇÃO</title>
</head>
<body>
    <h1>Hello Word!</h1>

     <!-- script language="php"></script> -->
     <?php
        // COMANDO NÃO SÃO CASE SENSITIVE
        echo "VICTOR SANTOS <br>";
        EcHo "BRUNO <br>";
        ECHO "TESTE <br>";


        $palavra = "Bolo";
        $PALAVRA = "Banana";
        echo $palavra;
        echo $PALAVRA;
     
       echo date("d/M/y");
       echo "Todos os direitos reservados @".date("Y");
       echo "<br>";
       date_default_timezone_set("America/São_Paulo");
       echo date_default_timezone_get();
       echo("G:i:s T");
       // phpinfo();     
     ?>


</body>
</html>