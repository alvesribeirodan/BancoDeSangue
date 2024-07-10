<?php
session_start();
include_once('siteconexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sangue = filter_input(INPUT_POST, 'sangue', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email";

$criar_usuario = "INSERT INTO doadores (nome, sangue, created) VALUES ('$nome','$sangue', NOW())";
$usuario_criado = mysqli_query($conn, $criar_usuario);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= color='green'>Doador cadastrado com sucesso</p>";
    header("Location: site_crud.php");
} else {
    header("Location: site_crud.php");
}