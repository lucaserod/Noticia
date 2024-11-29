 <?php
        setcookie("pesquisa", $_POST["pesquisa"], time()+3600);
        echo $_COOKIE["pesquisa"];
    ?>