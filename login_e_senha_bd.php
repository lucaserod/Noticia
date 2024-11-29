<?php

$host = "localhost:3306";
$usuario = "root";
$password = "";
$nome = "logins_e_senhas"; 
$nome_tabela = "cadastrados"; 
$nome_tabela2 = "noticias";


$conexao_bd = new mysqli($host, $usuario, $password);


if ($conexao_bd->connect_error) {
    die("ERRO DE CONEXÃO COM O BANCO DE DADOS: " . $conexao_bd->connect_error);
}

$conexao_bd->select_db($nome);


$bd = "CREATE DATABASE IF NOT EXISTS $nome";
if ($conexao_bd->query($bd) === TRUE) {
    $conexao_bd->select_db($nome); 
 
    $bd = "CREATE TABLE IF NOT EXISTS $nome_tabela (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        usuario VARCHAR(20) NOT NULL,
        senha VARCHAR(20) NOT NULL
    )";

    if ($conexao_bd->query($bd) === FALSE) {
        die("Erro na criação da tabela: " . $conexao_bd->error);
    }

    
    $bd2 = "CREATE TABLE IF NOT EXISTS $nome_tabela2 (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(200) NOT NULL,
        subtitulo VARCHAR (20)NOT NULL,
        descricao VARCHAR (20) NOT NULL
    )";

}

?>