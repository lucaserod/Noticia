<?php
session_start();
?>
<html lang="pt-BR">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><h1>jornal da manha oficial</h1></title>
        <link rel="stylesheet" href="bootstrap.css?v=1.0">
      
    </head>
   
    <body class="fundo">

    <form class="form-check-input offset-5" action="jm_senha.php" method="post">
        
        login:<input type="text" name="login">
        <br>
        senha:<input type="text" name="senha">
        <br>
        <input type="submit" value="Enviar">

    </form>

    <?php
    if (isset($_SESSION["erro"])){
        if($_SESSION["erro"] == 1){
            echo"<h1><b>usuário ou senha invalidos!</b></h1>";
        }elseif($_SESSION["erro"] == 2){
            echo"<h1><b>faça login!</b></h1>";
        }
    }
    ?>
    </body>
   
</html> 

</html>