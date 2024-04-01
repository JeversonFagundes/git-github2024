<?php

//está é a págian de conexão com o banco de dados git.

$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "git";

//conectar ao banco de dados.
$mysqli = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($mysqli->error) {
    die("Error ao conectar ao banco de dados:" . $mysqli->error);
}