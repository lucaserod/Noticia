<?php
session_start();
?>
<html lang="pt-BR" data-bs-theme="dark" class="h-100">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><h1>jornal da manha oficial</h1></title>
        <link rel = "stylesheet" href = "bootstrap.css">
        <link rel = "stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400&family=Open+Sans:wght@400&family=Playfair+Display:wght@700&display=swap" >
    </head>
   
    <body class="d-flex align-items-center py-4 bg-body-tertiary">
        <main class="w-100 m-auto form-container">
            <form action="jm_noticia_process.php" method="post">
                <h1 class="h3 mb-3 fw-normal">Publique sua noticia</h1>
                <div class="form-floating">
                    <input type="text" name="titulo" required class="form-control" id="floatingInput" placeholder="Titulo">
                    <label for="floatingInpunt">Titulo:</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="subtitulo" required class="form-control" id="floatingInput" placeholder="Subtitulo">
                    <label for="floatingInpunt">Subtitulo:</label>
                </div>
                <div class="form-floating">

               <p> noticia:</p>     <textarea name="descricao" required class="form-control" id="descricao" placeholder="Digite a notícia aqui..." rows="4" cols="50"></textarea>
                </div>
            	<input class="btn btn-primary w-100 py-2" type="submit"name="action" value="Enviar noticia">
        

            </form>
        </main>
    </body>

</html> 

</html>