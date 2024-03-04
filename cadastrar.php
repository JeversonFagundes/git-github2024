<?php
//conectar ao banco de dados
include("conecta.php");

//receber os dados.
$id = $_POST['id_usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//comando sql.
$sql = "INSERT INTO git (id_usuario, email, senha) VALUE ($id, "$email", "$senha")";

//excutar o comando.
mysqli_query($conexao, $sql);

?>