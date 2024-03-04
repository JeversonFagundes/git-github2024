<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "UPDATE usuario SET 
email = '$email', senha = '$senha' WHERE id_usuario = $id";

if ($mysqli->error) {

    die("Falha ao editar usuário no sistema:". $mysqli->error);

}else {
    header("location: listar.php");
}
// executa o comando no BD
mysqli_query($mysqli,$sql);
?>