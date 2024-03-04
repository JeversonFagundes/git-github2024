<?php

//conectar ao banco de dados.
include("conecta.php");

//comando sql.
$sql = "SELECT * FROM usuario";

// Executa o Select
$resultado = mysqli_query($mysqli,$sql);

//Lista os itens
echo '<table border=4;">
<tr>
<th>Email</th>
<th>Senha</th>
<th colspan=3>Opções</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';    
echo '<td>'.$dados['email'] .'</td>';
echo '<td>'.$dados['senha'] .'</td>';

echo '<td> <a href="formedit.php?id='.$dados['id_usuario'].'"> Editar </a> </td>';

echo '<td> <a href="excluir?id='.$dados['id_usuario'].'"> Excluir</a> </td>';

echo '</tr>';
}

echo '</table> <br><br>';

if ($mysqli->error) {
    die("Falha ao listar usuários no sistema:". $mysqli->error);
}

echo "<a href=\"index.html\">Voltar</a>"
?>


