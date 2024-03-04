<?php

//conectar ao banco de dados.
include("conecta.php");

// receber os dados do formulário
$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id_usuario=$id";

if ($mysqli->error) {
    die("Falha ao excluir usuário no sistema:". $mysqli->error);
}else {
    header("location: listar.php");
}

// executa o comando no BD
mysqli_query($mysqli,$sql);

?>