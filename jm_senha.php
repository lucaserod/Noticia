<?php
session_start();
include 'login_e_senha_bd.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["action"]) && $_POST["action"] == "Enviar" ){}

        $conexao_bd->select_db("logins_e_senhas");

        if (isset($_POST['login']) && isset($_POST['senha'])) {
            $usuario = $_POST["login"];
            $senha = $_POST["senha"];

            if($usuario === "adm"){
                if($senha === "123")
                header("Location: jm_adm_verificado.php");
            }

            $sql = "SELECT * FROM $nome_tabela WHERE usuario = '$usuario' AND senha = '$senha'";
            $result = $conexao_bd->query($sql);

            if ($result->num_rows > 0) {
                header("Location: jornal_da_manha_verificado.php");
            }
            

            
        }    
    }
    if(isset($_POST["action"]) && $_POST["action"] == "Criar"){
        header("Location: criar_usuario.php");
      
        
    }
    if(isset($_POST["action"]) && $_POST["action"] == "Criar1"){
        header("Location: jm_login.php");
    }
    




?>