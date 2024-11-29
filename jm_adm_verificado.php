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
                <li>
                    <a href="jm_publicacao.php">PUBLICAÇÕES</a>
                </li>


            </section>
        </div>
        <hr>
        <div id="bodyinteiro">
            
            <section id="inicio" class="offset-1">
            <?php
            $sql = "SELECT * FROM $nome_tabela2";

            $result = $conexao_bd->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){

                    echo "<a href='jm_noticia.php?id=".$row['id']."'><h1>".$row['titulo']."</h1></a>";
                    echo "<p>".$row['subtitulo']."</p>";
                 
                  
                
            }
            }else{
                echo "<p> Nenhuma nova noticia.</p>";
            }
            
            ?>
                <nav>
                    <h1 class="card-title justify-content-start">NOTICIA BEM GRANDE COMO PRINCIPAL</h1>
                    <p class="card-subtitle justify-content-start">subtitulo</p>
                </nav>

            </section>

            <div class="conteudo offset-1">
                <section class="textos">
                    <h1 class="card-title">Uma notícia 1 que deve ser um quadrado o texto</h1>
                    <p class="card-subtitle">Diz sobre a matéria</p>
                    <p class="card-title"  style="color: blue;">Diz sobre um tópico (esporte/economia)</p>
                    <p class="card-subtitle">Diz sobre o item acima</p>
            </section>
                <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="img">
                </section>

                <div class="linha-vertical"></div>

                <section class="textos2 offright-1">

                    <h1 class="card-title">Uma notícia 2 que deve ser um quadrado o texto</h1>
                    <hr>
                    <p class="card-subtitle">Diz sobre a matéria</p>
                    <hr>
                    <h1 class="card-title" style="color: blue;">Diz sobre um tópico (esporte/economia)</h1>
                    <hr>
                    <p class="card-subtitle">Diz sobre o item acima</p>

                </section>
            </div>

            <hr>

            <div id="imagens" class="d-inline-flex offset-1 offright-1">
                
                <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">
                <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">
                <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">
                <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">
                <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">

            </div>

            <div id="textodaimg" class="d-inline-flex">

                <p class="card-subtitle textos3 offset-1">Guerra interna faz partido de aliada de Bolsonaro se declarar 'neutro'</p>
                <p class="card-subtitle textos3">Diz sobre a matéria</p>
                <p class="card-subtitle textos3">Diz sobre a matéria</p>
                <p class="card-subtitle textos3">Diz sobre a matéria</p>
                <p class="card-subtitle textos3 offright-1">Diz sobre a matéria</p>

            </div>

            <hr>

        <div class="conteudo offset-1">

                <section class="textos">

                    <h1 class="card-title">Uma notícia 3 que deve ser um quadrado o texto</h1>
                    <p class="card-subtitle">Diz sobre a matéria</p>

                </section>

                <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="img">

                <div class="linha-vertical"></div>

                <section class="textos2 offright-1">

                    <h1 class="card-title">Uma notícia que deve ser um quadrado o texto</h1>
                    <hr>
                    <p class="card-subtitle">Diz sobre a matéria</p>
                    <hr>
                    <h1 class="card-title" style="color: blue;">Diz sobre um tópico (esporte/economia)</h1>
                    <hr>
                    <p class="card-subtitle">Diz sobre o item acima</p>

                </section>
        </div>

         <hr>

         <section id="imagens" class="d-inline-flex offset-1 offright-1">

            <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">
            <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">
            <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">
            <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">
            <img src="https://www.ienoticia.com.br/wp-content/uploads/2017/10/NOT%C3%8DCIA.png" alt="Imagem Notícia" class="tamanho">

        </section>
        <section id="textodaimg" class="d-inline-flex">

            <p class="card-subtitle textos3 offset-1">Guerra interna faz partido de aliada de Bolsonaro se declarar 'neutro'</p>
            <p class="card-subtitle textos3">Diz sobre a matéria</p>
            <p class="card-subtitle textos3">Diz sobre a matéria</p>
            <p class="card-subtitle textos3">Diz sobre a matéria</p>
            <p class="card-subtitle textos3 offright-1">Diz sobre a matéria</p>
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