<?php

//conectar ao banco de dados.
include("conecta.php");

//receber os dados.
$email = $_POST['email'];
$senha = $_POST['senha'];

//comando sql.
$sql = "INSERT INTO usuario (email, senha) VALUES ('$email','$senha')";

//excutar o comando.
mysqli_query($mysqli, $sql);

if ($mysqli->error) {
    die("Falha ao cadastrar no banco de dados:" . $mysqli->error);
}else {
    header("location: listar.php");
}
?>