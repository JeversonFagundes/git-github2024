<?php
// Recebe o id do usuário
$id = $_GET['id'];

// Conectar ao BD
include("conecta.php");


// Seleciona os dados do usuário da tabela usuáriio
$sql = "SELECT * FROM usuario WHERE id_usuario = $id";

// Executa o Select
$resultado = mysqli_query($mysqli,$sql);

// Gera o vetor com os dados buscados
$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    
</head>
<body>

<form action="editar.php" method="post">

    <h2>Editar usuário</h2>
    
    <label for="id">Id do usuário:</label>
    <input  type="text" id="id" value="<?php echo $dados['id_usuario'];?>" name="id"/><br><br>

    <label for="email">Informe seu email:</label>
    <input type="email" value="<?php echo $dados['email'];?>" name="email" id="email"/><br><br>
        
    <label for="senha">Informe sua senha:</label>
    <input type="text" value="<?php echo $dados['senha'];?>" name="senha" id="senha"/><br><br>
       

    <input type="submit" value="Editar"/>

    <p>Deseja <a href="index.html">Voltar!</a></p>

</form>
    
</body>
</html>
