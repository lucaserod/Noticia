<?php
include 'login_e_senha_bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"]) && $_POST["action"] == "Enviar noticia") {
      
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $descricao = $_POST['descricao'];

        $conexao_bd->select_db($nome);
      
        $bd = "INSERT INTO $nome_tabela2 (titulo,subtitulo,descricao) VALUES ('$titulo','$subtitulo','$descricao')";

        if ($conexao_bd->query($bd) === TRUE) {
            header("Location: jm_adm_verificado.php"); 
            exit();
        } else {
            echo "Erro ao inserir registro: " . $conexao_bd->error;
        }
    }
}
?>