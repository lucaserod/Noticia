<?php
session_start();
include 'login_e_senha_bd.php'
?>


<html lang="pt-BR">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><h1>jornal da manha oficial</h1></title>
        <link rel = "stylesheet" href = "bootstrap.css">
        <link rel = "stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400&family=Open+Sans:wght@400&family=Playfair+Display:wght@700&display=swap" >
    </head>
    <body>

        <div id = "cabeçalho">
            <section class = "titulo">
                <h1>JORNAL DA MANHA</h1> 
            </section>
            <hr class="hr"> 
            <section class = "menu_inicial">
            
                <li>
                    <a href="#economia">ECONOMIA</a>
                </li>
                <li>
                    <a href="#mundo">MUNDO</a>
                </li>
                <li>
                    <a href="#esporte">ESPORTE</a>
                </li>
                <li>
                    <a href="#saude">SAUDE</a>
                </li>
                

            </section>
        </div>
        <hr>
        <div id="bodyinteiro">
            
            <section id="inicio" class="offset-3 offright-2 textos">
            <?php
        
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql = "SELECT * FROM $nome_tabela2 WHERE id = $id";
                $result = $conexao_bd->query($sql);

                if ($result->num_rows > 0) {
                    $noticia = $result->fetch_assoc();
                    
                    echo "<h1 class>" . $noticia['titulo'] . "</h1>";
                    echo "<p>" . $noticia['subtitulo'] . "</p>";
                    echo "<p>" . $noticia['descricao'] . "</p>";
                } else {
                    echo "Notícia não encontrada!";
                }
            } else {
                echo "ID da notícia não fornecido.";
            }
            ?>

            
            </section>

        
        <div id = "rodape">
            <footer class = "rodape">
                <div class="offset-1">
                <h1>JORNAL DA MANHA</h1>
                </div>
                <div class = "icons">

                <p>SIGA</p>
                <img id = "facebook icone" src="https://cdn-icons-png.flaticon.com/128/1077/1077041.png">
                <img id = "whatsapp icone" src="https://cdn-icons-png.flaticon.com/128/1384/1384095.png">  
                <img id = "instagram icone" src="https://cdn-icons-png.flaticon.com/128/717/717392.png">
                <img id = "telegram icone" src="https://cdn-icons-png.flaticon.com/128/1946/1946547.png">
                
                </div>


            </footer>
            
        </div>
        
    </body>
</html>