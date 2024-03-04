<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial.</title>

</head>

<body>

<h1>Formulário de cadastro.</h1>

<form action="cadastrar.php" method="post">


<input type="hidden" name="id_usuario">

<label for="email"> Informe seu email</label>

<input type="email" name="email" id="email">

<label for="senha"> Informe sua senha</label>

<input type="password" name="senha" id="senha">

<input type="submit" value="Enviar">

</form>
</body>

</html>