<?php
include 'login_e_senha_bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"]) && $_POST["action"] == "Criar1") {
      
        $usuario = $_POST['login1'];
        $senha = $_POST['senha1'];

        $conexao_bd->select_db($nome);
      
        $bd = "INSERT INTO $nome_tabela (usuario, senha) VALUES ('$usuario', '$senha')";

        if ($conexao_bd->query($bd) === TRUE) {
            header("Location: jm_login.php"); 
            exit();
        } else {
            echo "Erro ao inserir registro: " . $conexao_bd->error;
        }
    }
}
?>